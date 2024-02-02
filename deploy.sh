eval $(ssh-agent)
ssh-add /home2/nirojprasaincom/.ssh/anil
ssh-add -l
cd /home2/nirojprasaincom/anil/college
git pull origin main
composer install
php artisan migrate --force
php artisan cache:clear
php artisan route:cache
php artisan config:cache
php artisan view:cache
