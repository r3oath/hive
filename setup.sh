composer install
npm install
gulp
touch .env
touch database/database.sqlite

echo "APP_ENV=local" > .env
echo "APP_DEBUG=true" >> .env
echo "APP_KEY=SomeString" >> .env
echo "DB_CONNECTION=sqlite" >> .env

php artisan key:generate
php artisan migrate --seed
php artisan serve
