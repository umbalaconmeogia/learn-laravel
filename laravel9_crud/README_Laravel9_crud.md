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

## Create CRUD for `products` table.

* Create migration for `products` table.
    ```shell
    php artisan make:migration create_products_table --create=products
    ```
    Update migration file then run `php artisan migrate`.
* Create controller and model
    ```shell
    php artisan make:controller ProductController --resource --model=Product
    ```
## References

[Laravel 9 Import Export Excel and CSV File Tutorial](https://www.itsolutionstuff.com/post/laravel-9-import-export-excel-and-csv-file-tutorialexample.htm)