# coachtech-test

## 環境構築

### Dockerビルド

 1. git clone https://github.com/k1haraRen/coachtech-test.git
 2. docker-compose up -d --build

### **＊ MySQLはOSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。**

*** Laravel環境構築

 1. docker-compose exec php bash
 2. composer instal
 3. cp .env.example .env
 4. .envファイルの<a name="environment">環境変数変更
 5. docker-compose exec php bash
 6. php artisan key:generate
 7. php artisan migrate
 8. php artisan db:seed

### 環境変数

　- DB_HOST=mysql
  - 
