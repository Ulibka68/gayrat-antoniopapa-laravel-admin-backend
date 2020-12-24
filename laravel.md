Composer не запуститься если не дать прав на директорию
wsl:
cd /root/_prj/antoniopapa/admin-backend/
chmod 777 sites
chmod 777 data

команда из под wsl
docker-compose up -d --build
docker-compose down

NGINX натсроен на хостинг hello.loc  
Не забываем в файле HOSTS добавить:
127.0.0.1 hello.loc


docker exec -it php bash
composer create-project --prefer-dist laravel/laravel:^7.0 hello