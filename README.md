![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/10297516/6dbb0a76-6c17-11e5-945d-97e1a22ee6d2.png)

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

# Docs

Check out the documentation at [ReadTheDocs](http://hive.readthedocs.org/)

# Quick-fire

If you're like most developers and hate having to repeat yourself writing code, you're in luck! Hive comes with it's own Service Provider that exposes a few new Artisan commands that make generating concrete implementations faster.

The quickest way to setup a new collection of resources/classes for a model/instance, is to fire off

```bash
php artisan hive:assemble Model
```

In the example above, replace **Model** with the name of your instance. `hive:assemble` will create a new instance, migration, validator, repo and factory for **Model**. The Hive specific classes will be placed in the `app\Lib` directory, while the rest in the standard Laravel locations.

# Example

To play with an example implementation of Hive, check out the `example-app` branch of this repo.
