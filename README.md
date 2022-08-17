Create Login Basic using the jetstream library

# 1. Technology
- PHP
- Laravel Framework 8.x

# 2. Configuration requirements
- Install composer: https://getcomposer.org/

# 3. Running

## Clone repo

```
$ git clone https://github.com/TanHongIT/laravel-training-module
$ cd laravel-training-module/blog
```

## Composer & npm

Run:

```
$ npm install
$ composer install
```

## Create APP_KEY

Run:

```
$ php artisan key:generate
```

## Create a new database in your host & edit .env

Create a new database in your server and edit the information in the .env file

```laravel
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Migrate Database 

Run:

```
$ php artisan migrate
```

## Run seeder

```
$ php artisan db:seed --class=UserSeeder
```

## Launch project 
Now, Launch your system...

Run the laravel project on port: http://localhost:8000

```
$ php artisan serve
```

Go to http://localhost:8000/login:
- Username: username1
- Password: 123456789 

![Image](https://imgur.com/mnu2crH.png)
