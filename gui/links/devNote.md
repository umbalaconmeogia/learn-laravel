# First UI Laravel application

## Overview

Learn coding Laravel UI application following the tutorial [Laravel Tutorial: Step by Step Guide to Building Your First Laravel Application](https://laravel-news.com/your-first-laravel-application)

The version of Laravel in this tutorial is too old.
I completed the development with some adjustment, but not complete the testing yet.

## Create project

* Create project *links*
    ```shell
    # Via the installer
    laravel new links

    # or Via composer
    composer create-project --prefer-dist laravel/laravel links
    ```
* Start the server
    ```shell
    php artisan serve
    ```
* Access to http://localhost:8000

## Database setup

* Edit *.env* to use sqlite
    ```
    DB_CONNECTION=sqlite
    DB_FOREIGN_KEYS=true
    DB_DATABASE=links.sqlite
    ```
* Create the file *database/links.sqlite*
    ```shell
    touch database/links.sqlite
    ```
* Run first migration
    ```shell
    php artisan migrate
    ```

## Authentication Scaffolding

* Install UI package
    ```shell
    composer require laravel/ui
    ```
* Generate routes, controllers, views, and other files necessary for auth
    ```shell
    php artisan ui bootstrap --auth
    ```
* Compile CSS UI
    ```shell
    npm install && npm run dev
    npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps

    ```

## Building a list of Links

* Create DB table
    ```shell
    php artisan make:migration create_links_table --create=links
    ```
