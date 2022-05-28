# Dev note

## Overview

Tutorial content: https://reffect.co.jp/laravel/laravel9-laravel-ui

## Command line

* Create project
    ```shell
    composer create-project --prefer-dist laravel/laravel laravel_9ui
    ```
* Install laravel/ui
    ```shell
    composer require laravel/ui
    ```
* Scaffolding
    ```shell
    php artisan ui bootstrap --auth
    ```
* Install ui dependencies
    ```shell
    npm install && npm run dev
    npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps
    npm run dev
    ```
* Initialize DB
    ```shell
    touch database/laravel_9ui.sqlite
    # Edit .env

    php artisan migrate
    ```
* Register from web UI http://localhost:8000/register

### Setup project from code

* Install dependencies
    ```shell
    composer install
    ```
* Generate APP_KEY in .env
    ```shell
    php artisan key:generate
    ```

## References

* [Laravel9でLaravel UIパッケージを利用して認証設定](https://reffect.co.jp/laravel/laravel9-laravel-ui)
* [Laravelでsqliteデータベースを使ってみよう](https://reffect.co.jp/laravel/laravel_sqlite)