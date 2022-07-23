
# Swift Apply

A powerful app where students apply for SKAUST Entrance Test and get admit card and center allotment.


## Table Of Contents

How To Install


## Features

- Built on Laravel 8.0
- Bootstrap-5
- Database- mysql
- Uses Artisan to manage database migration, schema creations, and create/publish page controller templates
- Dependencies are managed with COMPOSER
- 


## Installation

Clone project with following command:

```bash
  git clone https://github.com/qashifpeer/foa.git
```
Create a MySQL database for the project
```bash
mysql -u root -p
create database foa;
\qashifpeer
```
From the projects root run 
```bash
cp .env.example .env
```
Configure your .env file
Run composer install from the projects root folder.
From the projects root folder run:
```bash
php artisan vendor:publish
php artisan key:generate
php artisan migrate
composer dump-autoload
php artisan db:seed
```
Build the Front End Assets with Mix
From the projects root folder run 
```bash
npm install
npm run dev
```
You can use yarn against npm
Now Seed database using command:

```bash
php artisan db:seed 
```

And finally run your project ..
```bash
php artisan migrate
```
    
## Authors

- [@qashifpeer](https://www.github.com/qashifpeer)
