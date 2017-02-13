#!/usr/bin/env bash

php artisan cache:clear
php artisan migrate:refresh
php artisan db:seed --class=StudentsTableSeeder

