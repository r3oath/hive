# Instance

The instance interface is simple, it only exposes one method `identity`. Instances are are the main components passed around the framework, and in most cases will be Eloquent models, however not limited to.

### identity()

Returns a unique identifier for this instance.

```php
// In this example, return the Eloquent model database id.
return $this->id;
```