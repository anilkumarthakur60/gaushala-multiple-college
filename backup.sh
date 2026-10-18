#!/bin/bash
#
# Back up the database and uploads with spatie/laravel-backup, then commit
# and push the result to git.
#
# Usage:  bash backup.sh
# Cron:   30 1 * * * /bin/bash /home/<user>/public_html/backup.sh >> /home/<user>/backup.log 2>&1

set -euo pipefail

cd "$(dirname "$0")"

BRANCH="$(git rev-parse --abbrev-ref HEAD)"
PHP="${PHP:-php}"

echo "[$(date '+%F %T')] Starting backup on branch $BRANCH"

if ! grep -q '^BACKUP_ARCHIVE_PASSWORD=.\+' .env; then
    echo "BACKUP_ARCHIVE_PASSWORD is not set in .env - refusing to create an unencrypted backup." >&2
    exit 1
fi

"$PHP" artisan backup:clean --disable-notifications
"$PHP" artisan backup:run --disable-notifications

git add -A backups storage/app/public

if git diff --cached --quiet; then
    echo "Nothing new to commit."
    exit 0
fi

git commit -m "Backup $(date '+%F %H:%M')"
git push origin "$BRANCH"

echo "[$(date '+%F %T')] Backup pushed to origin/$BRANCH"
