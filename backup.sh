#!/bin/bash
#
# Back up the database with spatie/laravel-backup, then commit
# and push the result to git.
#
# Usage:  bash backup.sh
#         (the first run asks for the backup password and saves it to .env)
#
# Cron:   30 1 * * * /bin/bash /home/<user>/public_html/backup.sh >> /home/<user>/backup.log 2>&1
#         Set PHP=/path/to/php in front of the command if cron's php is not 8.4.

set -euo pipefail

cd "$(dirname "$0")"

PHP="${PHP:-php}"
BRANCH="$(git rev-parse --abbrev-ref HEAD)"

log()  { echo "[$(date '+%F %T')] $*"; }
fail() { echo "[$(date '+%F %T')] ERROR: $*" >&2; exit 1; }

log "Starting backup on branch $BRANCH"

# --- Checks -----------------------------------------------------------------

[ -f .env ] || fail ".env not found in $(pwd)"
[ -f vendor/autoload.php ] || fail "vendor/ missing - run: composer install --no-dev --optimize-autoloader"

"$PHP" -r 'exit(PHP_VERSION_ID >= 80300 ? 0 : 1);' \
    || fail "PHP 8.3+ required, found $("$PHP" -r 'echo PHP_VERSION;'). Set PHP=/opt/alt/php84/usr/bin/php"

for ext in fileinfo zip pdo_mysql; do
    "$PHP" -m | grep -qix "$ext" || fail "PHP extension '$ext' is missing - enable it in cPanel > Select PHP Version > Extensions"
done

command -v mysqldump >/dev/null || fail "mysqldump not found - ask your host to enable it"

# --- Backup password --------------------------------------------------------

if ! grep -Eq '^BACKUP_ARCHIVE_PASSWORD=.+' .env; then
    if [ ! -t 0 ]; then
        fail "BACKUP_ARCHIVE_PASSWORD is not set in .env. Run 'bash backup.sh' once by hand to set it."
    fi

    echo "No backup password set. Backups are encrypted with it - store it somewhere safe off this server."
    while true; do
        read -rsp "Backup password: " pass1; echo
        read -rsp "Repeat password: " pass2; echo
        if [ -z "$pass1" ]; then
            echo "Password cannot be empty."
        elif [ "$pass1" != "$pass2" ]; then
            echo "Passwords do not match."
        elif [[ "$pass1" == *"'"* ]]; then
            echo "Password cannot contain a single quote (')."
        else
            break
        fi
    done

    # Drop any empty BACKUP_ARCHIVE_PASSWORD= line, then append the new value.
    sed -i '/^BACKUP_ARCHIVE_PASSWORD=$/d' .env
    printf "\nBACKUP_ARCHIVE_PASSWORD='%s'\n" "$pass1" >> .env
    unset pass1 pass2
    log "Saved BACKUP_ARCHIVE_PASSWORD to .env"
fi

"$PHP" artisan config:clear --quiet

# --- Git identity -----------------------------------------------------------

git config user.name  >/dev/null || git config user.name  "Server Backup"
git config user.email >/dev/null || git config user.email "backup@$(hostname)"

# --- Run backup -------------------------------------------------------------

git pull --ff-only origin "$BRANCH" || fail "git pull failed - resolve local changes first (git status)"

"$PHP" artisan backup:clean --disable-notifications
"$PHP" artisan backup:run --only-db --disable-notifications

LATEST="$(ls -t backups/*/*.zip 2>/dev/null | head -1 || true)"
[ -n "$LATEST" ] || fail "backup:run finished but no zip was found in backups/"
log "Created $LATEST ($(du -h "$LATEST" | cut -f1))"

# --- Commit and push --------------------------------------------------------

git add -A backups

if git diff --cached --quiet; then
    log "Nothing new to commit."
    exit 0
fi

git commit -q -m "Backup $(date '+%F %H:%M')"
git push -q origin "$BRANCH"

log "Backup pushed to origin/$BRANCH"
