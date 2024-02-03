echo "Starting deployment script..."

cd /home2/nirojprasaincom/anil/college
echo "Current directory: $(pwd)"

chmod +x deploy.sh
eval $(ssh-agent)
ssh-add /home2/nirojprasaincom/.ssh/anil
ssh-add -l


git pull origin main
echo "Git pull completed."

npm run build
echo "NPM build completed."

composer install
echo "Composer install completed."

php artisan migrate --force
echo "Migration completed."

php artisan cache:clear
php artisan route:cache
php artisan config:cache
php artisan view:cache

echo "Deployment script completed."
