# Steps to create project using bootstrap and SQLite

## Initialize project

Assume that we create a Laravel project in the folder `myproject`.

* Create project
    ```shell
    composer create-project laravel/laravel myproject
    cd myproject
    ```
* Edit file .env to use SQLite
    ```
    DB_CONNECTION=sqlite
    DB_FOREIGN_KEYS=true
    #DB_PORT=3306
    #DB_DATABASE=laravel
    #DB_USERNAME=root
    #DB_PASSWORD=
    ```
    The database file is `database/database.sqlite`.
    To change the SQLite database file name, see [this document](https://github.com/detomo-inc/laravel-system-dev-convention/tree/main/docs/Experience/README.md#sqlite)
* Run migration
    ```shell
    touch database/database.sqlite
    php artisan migrate
    ```