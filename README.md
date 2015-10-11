![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/10297516/6dbb0a76-6c17-11e5-945d-97e1a22ee6d2.png)

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

To see how Hive has been implemented, check out the `app\Lib` directory as well as the `app\Http\Controllers\EntriesController.php` controller.

# Documentation

If you want to learn more about Hive, check out the [documentation](http://hive.readthedocs.org).