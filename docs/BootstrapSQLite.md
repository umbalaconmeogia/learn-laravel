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
* Start the web server and access to http://localhost:8000/
    ```shell
    php artisan serve
    ```

## Install Laravel UI

* Install laravel ui package
    ```shell
    composer require laravel/ui
    ```
* Install laravel ui package command for creating auth scaffolding using bootstrap 5.
    ```shell
    php artisan ui bootstrap --auth
    ```
* Install npm
    ```shell
    npm install && npm run dev
    ```
    If the warning *1 WARNING in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)
* appears, then install autoprefixer and run npm run dev again.
    ```
    npm install autoprefixer@10.4.5 --save-exact
    npm run dev
    ```
* Run migration command
    ```shell
    php artisan migrate
    ```

