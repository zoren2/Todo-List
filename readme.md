ToDo's List
=============
A simple task management ToDo list using Laravel PHP Web Framework.

## Requirements
* PHP >= 7.1.3 with Composer
* MySQL >= 5.6
* Node >= 8.0

## Installing

Clone the repo to the directory of your choice and install the vendors. 

```
https://github.com/zoren2/Todo-List.git
cd Todo-List
npm install
composer install
npm run dev
php artisan serve
```

You will also need to setup .env in order to properly communicate with your mySQL database. Begin by copying the template offered by the Laravel Framework. Continue with the command while you are still in the Todo-List directory.

```
cp .env.example .env
```

You will then need to edit the default fields to match your mySQL connection.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Next run the database migrations.

```
php artisan make:migration create_todos_table
```

## Running

Running the project is simple if you already have the required packages to install a Laravel project. Simply start the project on your local machine by running the following command.

```
php artisan serve
```

