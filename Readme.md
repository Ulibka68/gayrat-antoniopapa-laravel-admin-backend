# Развертывание backend Laravel для React

https://www.udemy.com/course/react-laravel-influencer/learn/lecture/22536428#questions


Настройки Nginx добавил отсюда:  
https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-laravel-with-nginx-on-ubuntu-20-04-ru

composer require --dev barryvdh/laravel-ide-helper

docker-compose up -d --build
docker-compose down

php artisan migrate
php artisan db:seed

php artisan ide:generate
php artisan ide:models

docker exec -it php bash
cd hello

