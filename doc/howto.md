
# dev

```
laravel new website
cd website/
npm install tailwindcss @tailwindcss/vite

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install


# restar after change .env
    php artisan cache:clear
    php artisan config:cache

php artisan db:wipe


cd website
php artisan serve
npm run dev

npm run watch


php artisan lang:publish

php artisan make:model Booking --migration
php artisan make:controller BookingController


php artisan make:mail BookingConfirmation
php artisan make:mail BookingNotification


```

# update for security fixes

```
composer audit
composer update
composer install

npm audit

```




## mailpit

```
docker run -d \
--name=mailpit \
--restart unless-stopped \
-p 8025:8025 \
-p 1025:1025 \
axllent/mailpit


# at .env

MAIL_MAILER=smtp
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME="no-reply@taxialmunecar16.com"
MAIL_PASSWORD=
MAIL_FROM_ADDRESS="no-reply@taxialmunecar16.com"
MAIL_FROM_NAME="taxialmunecar16.com"

```