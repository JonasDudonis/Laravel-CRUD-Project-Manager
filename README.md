<h1 align="center">Laravel CRUD Project Manager </h1>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"></a></p>

###  *Sprint-4 Exercise*
To create a fully functional CRUD (**C**reate, **R**ead, **U**pdate, **D**elete) application using Laravel web application framework. 

<br>
---
## Project features
- List project and employees
- View specific employees assigned to project
- Create / Update / Delete projects and employees
- Reassign employees to other projects
- Custom 404 page

## Prerequisites
|  Follow links below to download: |
| ------------- |
| Git (https://git-scm.com/downloads)      | 
| AMPPS (https://ampps.com/download)      | 
| Composer (https://getcomposer.org/download) | 

## Installation
1. Clone the repository or dl .zip package
2. Use XAMPP, AMPPS or other open-source platform to launch a php interpreter
3. Open it with Visual Studio Code or your preferred code editor.
4. Create a new schema in your MySQL server.

**OR**

4) Import and execute **'_/SQL_DUMPS/database.sql'** SQL script to create a new schema on MySQL Server (e.g [MySQL Workbench](https://dev.mysql.com/downloads/workbench)).
5. Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information.
> *Note: DB_DATABASE field should match the name of the schema.*
6. Install missing Laravel dependencies running bash cmd in your code editor terminal:
```sh
composer install
```
7. Run Bash cmd  to generate new Laravel application key value:
```sh
php artisan key:generate
```
8. Run Bash cmd to import tables into SQL database:
```sh
php artisan migrate
```
9. Run Bash cmd to open PHP's built-in development server and click on the newly generated link to open the application (e.g http://127.0.0.1:8000):
```sh
php artisan serve
```
10) *(Optional)* Import and execute **'_/SQL_DUMPS/Tables_dump20210418.sql'** SQL script to import dataset into MySQL database.

**OR**

10. *(Optional)* Run Bash cmd to fill tables with dataset:
```sh
php artisan db:seed
```

## Authors
[Jonas Dudonis](https://github.com/JonasDudonis)
<br>
<a href="https://www.linkedin.com/in/jonasdudonis" target="_blank"><img src="https://raw.githubusercontent.com/edent/SuperTinyIcons/8e583e7ef9b3eb18787975676ed61fadee086578/images/svg/linkedin.svg" width="25"></a> 