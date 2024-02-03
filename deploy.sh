echo "Starting deployment script..."

cd /home4/nirojprasaincom/anil/college
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
echo "Cache cleared."

php artisan route:cache
echo "Route cached."

php artisan config:clear
echo "Config cleared."

php artisan config:cache
echo "Config cached."

php artisan view:cache
echo "View cached."


echo "Deployment script completed."
