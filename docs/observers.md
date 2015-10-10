# Observer

An observer is any class wanting to receive updates whenever one of the **Handler** events are fired for a particular instance type. The interface only exposes one method `serial`.

!!! note
    For an observer class to receive events, it needs to implement one or more of the respective **Handler** interfaces. As some observers may only want to receive certain event types, the observer interface does not force you into implementing each event type. 

    For example, if you only want to be notified on destroy events, an observer class declaration may look like `class OnBookDestroyObserver implements ObserverInterface, OnDestroyInterface {...}`

### serial()

Returns a unique snake_case string serial for this observer.

```php
return 'on_book_destroy_observer';
```

# Observatory

The observatory is the orchestrator for one or many observers. When an event occurs, the observatory is notified which then dispatches the event and associated data to all its registered observers. This interface exposes the methods `registerObserver`, `unregisterObserver`, `getObservers` and a collection of event notifying methods following the signatures `notifyOnXSucceeded` and `notifyOnXFailed` where `X` is either `Create`, `Update` or `Failed`.

!!! hint
    A concrete implementation comes supplied with Hive. Please see `src/Concrete/Observers/Observatory`

### registerObserver(...)

Registers the observer with the observatory.

```php
$this->observers[$observer->serial()] = $observer;
```

### unregisterObserver(...)

Unregisters the observer from the observatory.

```php
if (array_key_exists($observer->serial(), $this->observers)) {
    unset($this->observers[$observer->serial()]);
    $this->observers = array_values($this->observers);
}
```

### getObservers()

Returns an array/collection of registered observers.

```php
return $this->observers;
```

### notifyOnXSucceeded(...)

Notify all registered observers that have implemented the **OnXInterface** that **xSucceeded**. 

```php
// In this example, we're using the notifyOnCreateSucceeded method.
foreach ($this->observers as $observer) {
    if ($observer instanceof OnCreateInterface) {
        $observer->createSucceeded($instance);
    }
}
```

### notifyOnXFailed(...)

Notify all registered observers that have implemented the **OnXInterface** that **xFailed**. 

```php
// In this example, we're using the notifyOnDestroyFailed method.
foreach ($this->observers as $observer) {
    if ($observer instanceof OnDestroyInterface) {
        $observer->destroyFailed($message);
    }
}
```