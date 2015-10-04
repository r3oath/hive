![Hive: Hexagonal Architecture Framework for Laravel](https://cloud.githubusercontent.com/assets/2805249/10210584/1901b6f4-682c-11e5-9c6c-f1a549f34f7e.png)

[![Build Status](https://travis-ci.org/r3oath/hive.svg?branch=master)](https://travis-ci.org/r3oath/hive) 
[![Coverage Status](https://coveralls.io/repos/r3oath/hive/badge.svg?branch=master&service=github)](https://coveralls.io/github/r3oath/hive?branch=master)
[![PHP version](https://badge.fury.io/ph/r3oath%2Fhive.svg)](http://badge.fury.io/ph/r3oath%2Fhive)

Hexagonal architecture framework for Laravel 5.1

# Installation

Installation is simple, simply issue the following composer command

```bash
$ composer require r3oath/hive
```

# Structure

##### src/Contracts
The interfaces defined in this directory can be used as needed by your application. They define common OO patterns and provide the basis for a hexagonal framework within Laravel.

##### src/Concrete
The classes defined in this directory implement various contracts and provide a good starting point for your application, hopefully saving you time during development.

# Example

To play with an example implementation of Hive, check out the `example-app` branch of this repo.