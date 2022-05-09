# Laravelの教科書 Laravelを使ったウェブサイトの開発

Tutorial: https://note.com/laravelstudy/n/nb6456b42cf1e?magazine_key=m0f95e03c75c5

## 1. [トップページの開発 #Laravelの教科書 #Laravelを使ったウェブサイトの開発](https://note.com/laravelstudy/n/n98f754efc6da)

* Create project
  ```shell
  composer create-project --prefer-dist laravel/laravel company_site
  cd company_site
  ```
* Start server
  ```shell
  php -S localhost:8000 -t public
  ```