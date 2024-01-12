## Create a controller
php artisan make:controller PageController

## Start laravel server
php artisan serve

## Route list
php artisan route:list

## Create migration table
php artisan make:migration create_posts_table

## Migrate all data structure
php artisan migrate

## Model options
php artisan make:model --help

## Create Model and factory
php artisan make:model Post -fc

## Update tables within factory seeders
php artisan migrate:refresh --seed
