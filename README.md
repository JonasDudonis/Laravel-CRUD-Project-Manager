<h1 align="center">Laravel CRUD Project Manager </h1>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"></a></p>

###  *Sprint-4 Exercise*
> To create a fully functional CRUD (**C**reate, **R**ead, **U**pdate, **D**elete) application using Laravel web application framework.

---
<br>

## Project features
- List project and employees
- View specific employees assigned to project
- Create / Update / Delete projects and employees
- Reassign employees to other projects
- Custom 404 page

## Prerequisites

> Git [https://git-scm.com/downloads]
<br>
> AMPPS [https://ampps.com/download]
<br>
> Composer [https://getcomposer.org/download]

## Installation
1. Clone the repository or dl .zip
2. Use XAMPP, AMPPS or other open-source platform to launch a php interpreter
3. Open root folder (e.g if Using AMPPS, navigate to '/www' folder in AMPPS directory.
4. a) If cloning the repo, install missing Laravel dependencies running bash cmd in project folder:
```sh
composer install
```
or
```sh
composer update
```
4. b1) if downloading the .zip, first create the laravel project in AMPPS /www folder using bash cmd:

```sh
php composer.phar create-project laravel/laravel Laravel-CRUD-Project-Manager
```
4. b2) extract the contents of the .zip archive to /laravel Laravel-CRUD-Project-Manager folder.

5. Modify .htaaccess file in /www directory to change Apache server settings to redirect project's URL to root (http://localhost). Add rewrite override to .htaaccess file:
```sh
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ Laravel-CRUD-Project-Manager/public/$1 [L]
</IfModule>
```

6) a) Import and execute **'_/SQL_DUMPS/database.sql'** SQL script to create database schema into MySQL database (e.g [MySQL Workbench](https://dev.mysql.com/downloads/workbench)).
<br>
or
6. b) Execute the following SQL query in database:

```sh
CREATE DATABASE `laravel-project-manager` 40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' ;
```

7. *(Optional)* if needed, create migrations using Bash cmd:
```sh
php artisan make:model <model_name> -m 
```

8. Import migrations into SQL database using Bash cmd:
```sh
php artisan migrate
```

9. *(Optional)* Import and execute **'_/SQL_DUMPS/Tables_dump20210418.sql'** SQL script to import dataset into MySQL database.

## Authors
[Jonas Dudonis](https://github.com/JonasDudonis)
<br>
<a href="https://www.linkedin.com/in/jonasdudonis" target="_blank"><img src="https://raw.githubusercontent.com/edent/SuperTinyIcons/8e583e7ef9b3eb18787975676ed61fadee086578/images/svg/linkedin.svg" width="20"></a> 

