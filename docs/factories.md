# Factory

A factory is a class designed specifically to create and update instances. They are primary used by an associated **Repo**. The interface exposes the methods `make` and `update`.

### instantiation

In this example we pass in a **BookValidator** that will be used during creation and modification of instances.

```php
protected $validator;
public function __construct(BookValidator $validator)
{
    $this->validator = $validator;
}
```

### make(...)

Expects `OnCreateInterface $handler`, `MutatorInterface $mutator` and optionally `ObservatoryInterface $observatory`. This method takes the supplied mutator, creates a new instance and calls the respective `createSucceeded` or `createFailed` methods on the `$handler`, if an optional `$observatory` has been supplied, it will call the respective `notifyOnCreateSucceeded` and `notifyOnCreateFailed` methods depending on the outcome.

```php
$this->validator->validate($mutator->all());

if ($this->validator->hasErrors()) {
    $message = new Message('Failed to validate the supplied attributes', $this->validator);

    if ($observatory !== null) {
        $observatory->notifyOnCreateFailed($message);
    }

    return $handler->createFailed($message);
}

$instance = new Book;
$instance->fill($mutator->all());
$instance->save();

if ($observatory !== null) {
    $observatory->notifyOnCreateSucceeded($instance);
}

return $handler->createSucceeded($instance);
```

### update(...)

Expects `OnUpdateInterface $handler`, `InstanceInterface $instance`, `MutatorInterface $mutator` and optionally `ObservatoryInterface $observatory`. This method takes the supplied mutator, updates the supplied instance and calls the respective `updateSucceeded` or `updateFailed` methods on the `$handler`, if an optional `$observatory` has been supplied, it will call the respective `notifyOnUpdateSucceeded` and `notifyOnUpdateFailed` methods depending on the outcome.

```php
$this->validator->markAsUpdate()->validate($mutator->all());

if ($this->validator->hasErrors()) {
    $message = new Message('Failed to validate the supplied attributes', $this->validator);

    if ($observatory !== null) {
        $observatory->notifyOnUpdateFailed($message);
    }

    return $handler->updateFailed($message);
}

$instance->fill($mutator->all());
$instance->save();

if ($observatory !== null) {
    $observatory->notifyOnUpdateSucceeded($instance);
}

return $handler->updateSucceeded($instance);
```