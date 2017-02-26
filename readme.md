# Working JWT Authentication Laravel 5.4

## install dependencies
```code
composer update

sudo chmod -R 777 bootstrap/cache storage/

composer dump-autoload -o & php artisan view:clear & php artisan cache:clear 

php artisan migrate --seed
```
Please note to remove `'authenticate'` on `Middleware\VerifyCsrfToken.php` if you decide to use this on production 

You can just add `'X-CSRF-TOKEN': [LARAVEL_CSRF_TOKEN],` on HttpRequest header