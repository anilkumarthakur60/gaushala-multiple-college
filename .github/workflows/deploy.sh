cd /home/rgbitsol/test/cicd

git pull origin main

composer install --no-interaction

php artisan migrate --force

php artisan cache:clear

php artisan route:cache

php artisan config:cache

php artisan view:cache
