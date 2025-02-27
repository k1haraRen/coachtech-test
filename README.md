# coachtech-test

## 機能

 - ユーザー登録、ログイン
 - お問い合わせフォーム、お問い合わせ管理

## 環境構築

### Dockerビルド

 1. git clone https://github.com/k1haraRen/coachtech-test.git
 2. docker-compose up -d --build

### **＊ MySQLはOSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。**

*** Laravel環境構築

 1. docker-compose exec php bash
 2. composer instal
 3. cp .env.example .env
 4. .envファイルの<a name="environment">環境変数</a>変更
 5. docker-compose exec php bash
 6. php artisan key:generate
 7. php artisan migrate
 8. php artisan db:seed

### [環境変数](#environment)

 * DB_HOST=mysql
 * DB_DATABASE=laravel_db
 * DB_USERNAME=laravel_user
 * DB_PASSWORD=laravel_pass

### Fortifyのセットアップ
 1. composer require laravel/fortify
 2. App\Providers\FortifyServiceProvider::class,　をconfig/app.phpのprovidersに追加
 3. php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
 4. php artisan migrate

## 環境
 - PHP 7.4
 - Laravel 8
 - MySQL 8.0

## ER図

![Image](https://github.com/user-attachments/assets/0b17efec-0d53-4757-81e9-2efb00aa7b65)

## URL

 * 開発環境：https://localhost/
 * phpMyAdmin：http://localhost:8080/
