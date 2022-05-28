# Laravel 9 CRUD example dev note

Tutorial source: [Laravel 9 CRUD Application Tutorial Example](https://www.itsolutionstuff.com/post/laravel-9-crud-application-tutorial-exampleexample.html)

## Setup project

* Create project
    ```shell
    composer create-project laravel/laravel laravel9_crud
    ```
* Database configuration (set in .env)
    ```shell
    DB_CONNECTION=sqlite
    DB_FOREIGN_KEYS=true
    DB_DATABASE=database/laravel9_crud.sqlite
    ```
* Create migration
    ```shell
    touch database/laravel9_crud.sqlite
    php artisan migrate
    ```
* Start the server then access to http://localhost:8000/
    ```shell
    php artisan serve
    ```
* Create migration for `products` table.
*

## References
