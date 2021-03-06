
## Initiate project

* Create project
    ```shell
    composer create-project laravel/laravel --prefer-dist tutorpoint
    cd tutorpoint
    ```
* Config in .env file
    ```
    DB_CONNECTION=sqlite
    DB_FOREIGN_KEYS=true
    ```
* Create sqlite file
    ```shell
    touch database/database.sqlite
    php artisan migrate
    ```
* Start the web server and access to http://localhost:8000/
    ```shell
    php artisan serve
    ```

## Maintenance mode
    ```shell
    php artisan down
    ```

    ```shell
    php artisan up
    ```

## Middleware

* Create Middleware
    ```shell
    php artisan make:middleware RoleMiddleware
    ```

## Controller

* Create RESTful Controller
    ```shell
    php artisan make:controller RestController --resource
    ```