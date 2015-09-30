# Hive

[![Build Status](https://travis-ci.org/r3oath/hive.svg?branch=master)](https://travis-ci.org/r3oath/hive) 
[![Coverage Status](https://coveralls.io/repos/r3oath/hive/badge.svg?branch=master&service=github)](https://coveralls.io/github/r3oath/hive?branch=master)

Hexagonal architecture framework for Laravel 5.1

# Installation

Installation is simple, simply issue the following composer command

```bash
$ composer require r3oath/hive
```

# Structure

The following **contracts** define the base structure of this framework.

##### src/Contracts/Data/
- **GenericMessage** Defines a message that is passed along with a failure notification, providing the requesting class with more information as to what went wrong. 
- **GenericValidator** Provides attribute/data validation. Typically used by the instance factory.

##### src/Contracts/Factories/
- **GenericFactory** Provides methods for instantiating and updating instances.

##### src/Contracts/Handlers/
- **CreateHandler** Implemented by a requesting class wishing to receive notifications on instance creation.
- **UpdateHandler** Implemented by a requesting class wishing to receive notifications on instance updates.
- **DestroyHandler** Implemented by a requesting class wishing to receive notifications on instance destruction.

##### src/Contracts/Instances/
- **GenericInstance** Defines some simple methods to distinguish instances from each other.

##### src/Contracts/Observers/
- **GenericObservatory** The observatory interface allows a repository (or another class) to notify a number of different services on instance creation, updates and destruction. Eg: Sending out an email to an author when their book has been added.
- **GenericObserver** Defines an observer that can optionally receive create, update or destroy notifications from the observatory.

##### src/Contracts/Repos/
- **GenericRepo** Defines an instance repository that delegates the creation, modification and destruction of instances.

# Usage

You are free to implement the given contracts in what ever manner suits your development needs. Some contracts have been realized to help speed up your development and can be found/extended from the `src/Concrete/...` directory.