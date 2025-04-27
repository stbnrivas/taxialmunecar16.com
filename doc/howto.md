
# dev

```
laravel new website
cd website/
npm install tailwindcss @tailwindcss/vite

cp .env.example .env
php artisan key:generate
php artisan migrate

php artisan db:wipe


cd website
php artisan serve
npm run dev

npm run watch


php artisan lang:publish

php artisan make:model Booking --migration
php artisan make:controller BookingController


```