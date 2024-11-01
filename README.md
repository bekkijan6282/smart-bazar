<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Local set up

copy and change .env.example

run php artisan migrate

run php artisan db:seed --class=RoleSeeder

run php artisan db:seed --class=UserSeeder

Mechant login credentials:

    username: merchant@gmail.com
    password: 123456789

## Docker setup

copy and change .env.docker.example

run docker-compose build

run docker-compose up -d

run docker exec -it smartbazar-app /bin/bash

run php artisan migrate

run php artisan db:seed --class=RoleSeeder

run php artisan db:seed --class=UserSeeder

Mechant login credentials:

    username: merchant@gmail.com
    password: 123456789
