php artisan install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link

composer dump-autoload
