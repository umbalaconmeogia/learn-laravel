# Laravel基礎　Laravel頻出パターン

Tutorial: https://note.com/laravelstudy/m/me6288d51a1b8

## [データーベースの利用](https://note.com/laravelstudy/n/nd1b15530ed0d?magazine_key=me6288d51a1b8)

### Create project

* Create project
    ```shell
    composer create-project --prefer-dist laravel/laravel database
    cd database
    ```
* Start server
    ```shell
    php -S localhost:8000 -t public
    ```
    or
    ```shell
    php artisan serv
    ```

### Commands

1. Config .env for sqlite database.
2. テーブルの作成
    ```shell
    php artisan make:migration create_user_entry_table
    ```
    After update migration file, run
    ```shell
    php artisan migrate
    ```
3. テーブルの構造を変更
    ```shell
    php artisan make:migration add_column_user_entry_table --table=user_entry
    ```
    After update migration file, run
    ```shell
    php artisan migrate
    ```
4. Seederの準備
    ```shell
    php artisan make:seeder UserEntrySeeder
    ```
    After update seeder file, run
    ```shell
    php artisan db:seed --class=UserEntrySeeder
    ```
5. Other commands
    * Run all seeder
        ```shell
        php artisan db:seed
        ````
    * Refresh all data (rollback then run migration again)
        ```shell
        php artisan migrate:refresh
        ````
    * Delete all tables (except migration table)
        ```shell
        php artisan migrate:reset
        ````
    * List invoked migration
        ```shell
        php artisan migrate:status
        ````
    * Delete all tables (including migration table)
        ```shell
        php artisan db:wipe
        ```
### MVC

1. Create model
    ```shell
    php artisan make:model UserEntry
    ```
2. Create controller
    ```shell
    php artisan make:controller UserEntryController
    ```
## [ユーザーログイン機能の作成 #Laravel頻出パターン #Laravel基礎](https://note.com/laravelstudy/n/n085aac4506bb)

1. Create project
    ```shell
    composer create-project --prefer-dist laravel/laravel login_sample
    cd login_sample
    ```
1. Create middleware
    ```share
    php artisan make:middleware SimpleAuth
    ```

## Debug

* Tinker
    ```shell
    php artisan tinker
    ```
* dump()
* dd(): dump and die.
