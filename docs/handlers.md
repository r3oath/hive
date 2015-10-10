# OnCreate, OnUpdate, OnDestroy

The handler interfaces defined each provide two methods, one for success, the other for failure. The success methods follow the signature `xSucceeded` and the failure methods `xFailed`. `x` being the respective event types, either `create`, `update` or `destroy`.

### xSucceeded(...)

The succeeded methods expect a `InstanceInterface $instance` related to the event. This will be used by the requesting class.

### xFailed(...)

The failed methods expect a `MessageInterface $message`. The message should pass along a concise description as to what went wrong and optionally attach a validator.