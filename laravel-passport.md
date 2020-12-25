# Установить passport

https://medium.com/modulr/create-api-rest-with-laravel-7-passport-authentication-part-1-a8198e5d0a9

https://laravel.com/docs/7.x/passport#installation

// use UUIDs instead of auto-incrementing integers as the Passport Client model's primary key values.

composer require laravel/passport "~9.0"  
php artisan migrate  
php artisan passport:install --uuids
php artisan passport:install
php artisan passport:keys

After running the passport:install command, add the Laravel\Passport\HasApiTokens trait to your App\User model

class User extends Authenticatable
{
use HasApiTokens, Notifiable;
}