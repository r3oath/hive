![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/10210584/1901b6f4-682c-11e5-9c6c-f1a549f34f7e.png)

[![Build Status](https://travis-ci.org/r3oath/hive.svg?branch=master)](https://travis-ci.org/r3oath/hive) 
[![Coverage Status](https://coveralls.io/repos/r3oath/hive/badge.svg?branch=master&service=github)](https://coveralls.io/github/r3oath/hive?branch=master)
[![PHP version](https://badge.fury.io/ph/r3oath%2Fhive.svg)](http://badge.fury.io/ph/r3oath%2Fhive)

Hexagonal architecture framework for Laravel 5.1

# Example app installation.

If you just want to install this example app and not clone the entire Hive repo, simply issue the following command, **hive-example-app** being the folder you'd like it intalled into.

```bash
$ git clone -b example-app --single-branch https://github.com/r3oath/hive.git hive-example-app
```

Once you have the example app cloned, issue the following commands inside the example app directory.

```bash
$ composer install
$ npm install
$ gulp
```

You'll need to setup your `.env`. At a very minimum use the following 

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeString
DB_CONNECTION=sqlite
```` 

and run

```bash
$ php artisan key:generate
$ touch database/database.sqlite
$ php artisan migrate --seed
$ php artisan serve
```

You should now be able to access the example app at `localhost:8000`

To see how Hive has been implemented in this example, have a look in the `app\Lib` directory, as well as the `app\Http\Controllers\EntriesController.php` controller.

Enjoy!
