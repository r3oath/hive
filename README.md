# Deprecated
Hive has now been deprecated in favour of the more robust and framework agnostic [Enzyme/Axiom](https://github.com/enzyme/axiom) package. Axiom is unfortunately not backwards compatible with Hive. But don't worry, it still plays great with Laravel! So if you're just starting out with a new project, [try it out!](https://github.com/enzyme/axiom) :tada:

# Current Build

[![Build Status](https://travis-ci.org/r3oath/hive.svg?branch=master)](https://travis-ci.org/r3oath/hive) 
[![Coverage Status](https://coveralls.io/repos/r3oath/hive/badge.svg?branch=master&service=github)](https://coveralls.io/github/r3oath/hive?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/r3oath/hive/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/r3oath/hive/?branch=master)
[![PHP version](https://badge.fury.io/ph/r3oath%2Fhive.svg)](http://badge.fury.io/ph/r3oath%2Fhive)
[![StyleCI](https://styleci.io/repos/43109264/shield)](https://styleci.io/repos/43109264)
![License MIT](https://img.shields.io/packagist/l/r3oath/hive.svg)
[![Documentation Status](https://readthedocs.org/projects/hive/badge/?version=latest)](http://hive.readthedocs.org/en/latest/?badge=latest)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8b6b45d7-125c-4c56-ae1c-bea14f98ab4c/big.png)](https://insight.sensiolabs.com/projects/8b6b45d7-125c-4c56-ae1c-bea14f98ab4c)

# Installation

Installation is simple, simply issue the following composer command

```bash
composer require r3oath/hive
```

# Example App

Want to have a play around with an example implementation of Hive? Check out the [example-app branch](https://github.com/r3oath/hive/tree/example-app).

# Docs

Check out the documentation at [ReadTheDocs](http://hive.readthedocs.org/)

# Quick-fire

Hive comes with its own Service Provider that exposes a few new Artisan commands that make generating concrete implementations faster.

To enable it, simply append the following line to the `'providers'` array inside `config\app.php`.

```php
R\Hive\Providers\HiveServiceProvider::class,
```

The quickest way to setup a new collection of resources for a model is to fire off the following command

```bash
php artisan hive:assemble X
```

In the example above, replace **X** with the name of your model. `hive:assemble` will create a new ***model***, ***migration***, ***mutator***, ***validator***, ***repo***, ***factory*** and ***controller*** for **Model**. 

Implementations can also be generated seperately through artisan with the following Hive commands:

- hive:command
- hive:controller
- hive:factory
- hive:handler
- hive:instance
- hive:repo
- hive:validator
- hive:mutator

The Hive specific classes will be placed in the `app\Lib` directory, while the rest will be located in standard Laravel locations.

# Example

To play with an example implementation of Hive, check out the `example-app` branch of this repo.
