# laravel10-docker-apache-shop
Создание интернет магазина с использованием Laravel v10.48.8 (PHP v8.2.18), MySQL 8. Dockerfile, docker-compose.yml, Apache в проекте.

За основу взяты:
Документация по Контейнеризации, Dockerfile, docker-compose.yml, Laravel 10, MySQl,
обучающие ролики Laravel 6 с канала 
Grapes без контейнеризации с хорошим объяснением принципов https://www.youtube.com/watch?v=SnAhbxKaqRg&list=PLze7bMjv1CYtGKFuL_8G0OxsSMmvHE6Xc&index=1 

и много другой информации.

Использовалось:
Ubuntu 22.04

composer -v <br>
Composer 2.2.6 2022-02-04 17:00:38

docker-compose -v <br>
Docker Compose version v2.12.2

docker -v <br>
Docker version 26.0.0, build 2ae903e

Laravel v10.48.8 (PHP v8.2.18), MySQL 8.

Были даны разрешения на папки и файлы:

 storage/ <br>
 bootstrap/cache <br>
 mysql-data <br>
 public - после добавления шаблона сайта <br>
!!! Иначе без прав доступа не подхватываются части кода в контейнере.

Создание --build и запуск up контейнера в фоне -d 

    docker-compose up --build -d

Останов

    docker-compose down

Запуск созданного

    docker-compose up -d


