![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/10210584/1901b6f4-682c-11e5-9c6c-f1a549f34f7e.png)

[![Build Status](https://travis-ci.org/r3oath/hive.svg?branch=master)](https://travis-ci.org/r3oath/hive) 
[![Coverage Status](https://coveralls.io/repos/r3oath/hive/badge.svg?branch=master&service=github)](https://coveralls.io/github/r3oath/hive?branch=master)
[![PHP version](https://badge.fury.io/ph/r3oath%2Fhive.svg)](http://badge.fury.io/ph/r3oath%2Fhive)

Hexagonal architecture framework for Laravel 5.1

# Example app installation.

Once you have checked out this branch, issue the following commands.

```bash
$ composer install
$ npm install
$ gulp
```

You'll need to setup your `.env`, at a very minimum, just specify that `DB_CONNECTION=sqlite` and run

```bash
$ touch database/database.sqlite
$ php artisan migrate --seed
$ php artisan serve
```

You should now be able to access the example app at `localhost:8000`

When you've done trying it out and want to see how Hive has been implemented, check out the source code and have a look in the `app\Lib` directory, as well as the `app\Http\Controllers\EntriesController.php` controller.

Enjoy!
