# Add debug output
echo "Starting deployment script..."

eval $(ssh-agent)
ssh-add /home2/nirojprasaincom/.ssh/anil
ssh-add -l

cd /home2/nirojprasaincom/anil/college
echo "Current directory: $(pwd)"

git pull origin main
echo "Git pull completed."

composer install
echo "Composer install completed."

php artisan migrate --force
echo "Migration completed."

php artisan cache:clear
php artisan route:cache
php artisan config:cache
php artisan view:cache

echo "Deployment script completed."
