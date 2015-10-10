# Repo

The repository handles the creation and modification for a particular instance type. The interface exposes the methods `all`, `find`, `create`, `update`, `destroy` and `supportsObservatory`.

!!! note
    In most cases, each instance type will have a dedicated repo. So if your system had the models **Book** and **Author**, you'd most likely require a **BookRepo** and an **AuthorRepo**.

### instantiation

In this example, we pass in an instance of the **BookFactory** which will be used by the `create` and `update` methods. The **observatory** will be explained further down.

```php
protected $factory;
protected $observatory;

public function __construct(BookFactory $factory)
{
    $this->factory     = $factory;
    $this->observatory = null;
}
```

### all()

Returns an array/collection of all instances managed by the repo.

```php
// In this example we're using Eloquent models.
return Book::all();
```

### find(...)

Expects `$id`. Find and return the instance by the given ID or null if not found.

```php
// In this example we're using Eloquent models.
return Entry::find($id);
```

### create(...)

Expects `OnCreateInterface $handler` and `$attributes = []`. This method will take the given attributes and attempt to create an instance for which the repo manages, notifying the `$handler` of the outcome.

```php
return $this->factory->make(
    $handler,
    $attributes,
    $this->observatory // Optional, see below.
);
```

### update(...)

Expects `OnUpdateInterface $handler`, `InstanceInterface $instance` and `$attributes = []`. This method will take the given attributes and attempt to modify the supplied instance for which the repo manages, notifying the `$handler` of the outcome.

```php
return $this->factory->update(
    $handler,
    $instance,
    $attributes,
    $this->observatory // Optional, see below.
);
```

### destroy(...)

Expects `OnDestroyInterface $handler` and `InstanceInterface $instance`. This method will attempt to destroy/delete the supplied instance for which the repo manages, notifying the `$handler` of the outcome.

```php
$instance->delete();

// The following if statement is optional, see below.
if ($this->observatory !== null) {
    $this->observatory->notifyOnDestroySucceeded($instance);
}

return $handler->destroySucceeded($instance);
```

### supportsObservatory()

Whether this repo supports and observatory. If this method returns true, it is assumed that the repo implements the `SupportsObservatoryInterface` explained below.

```php
return true; // In this example, we do support an observatory.
```

# Supports Observatory

The supports observatory interface exposes the methods `registerObservatory` and `unregisterObservatory`. If a **Repo** implements this interface, it's assumed that it's method `supportsObservatory` returns true and that it will notify the observatory when various handler events are triggered.

### registerObservatory(...)

Expects `ObservatoryInterface $observatory`. Will register the given observatory with the repo.

```php
$this->observatory = $observatory;
```

### unregisterObservatory(...)

Expects `ObservatoryInterface $observatory`. Will unregister the given observatory from the repo.

```php
$this->observatory = null;
```
