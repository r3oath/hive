![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/11162622/a033d5de-8af6-11e5-987a-1ea3490aac2b.png)

# Example app installation.

If you want to install the example app and not clone the entire Hive repo, simply issue the following command.

```bash
git clone -b example-app --single-branch https://github.com/r3oath/hive.git hive-example-app
```

Once cloned, simply run the included `setup.sh` file or issue the following commands...

```bash
composer install
npm install
gulp
```

You'll need to setup your `.env`. At a very minimum use the following... 

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeString
DB_CONNECTION=sqlite
```` 

and then run...

```bash
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

You should now be able to access the example app at `localhost:8000`!

To see how Hive has been implemented, check out the `app\Lib` directory as well as the `app\Http\Controllers\Web` & `...\Api` Entry controllers.

# Documentation

If you want to learn more about Hive, check out the [documentation](http://hive.readthedocs.org).