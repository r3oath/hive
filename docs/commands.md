# Bus

The bus dispatches commands to their respective handlers. The interface exposes the following methods, `execute`, `resolveHandler` and `handlersNamespace`.

!!! hint
    A concrete implementation comes supplied with Hive. Please see `src/Concrete/Commands/Bus`

### execute(...)

Expects `CommandInterface $command`. Its job is to resolve the handler for this command, execute it and return the result of the operation.

```php
return $this
    ->resolveHandler($command->serial())
    ->execute($command);
```

### resolveHandler(...)

Expects a command `$serial`. Its job is to resolve the handler for the given command and return it.

```php
$class = $this->getClassNameFromSerial($serial);
if (class_exists($class)) {
    return new $class();
}

throw new NoSupportedHandlerFoundException($serial);
```

### handlersNamespace()

Returns the namespace where the command handlers are located.

```php
return 'App\Lib\Commands\Handlers';
```

# Command

A command is simply a container for data that will be used by its handler to perform a given task, the interface exposes one method `serial`

### example container

```php
public $digit;

public function __construct($digit)
{
    $this->digit = $digit;
}

// Initialized as $command = new GetDigitPlusOneCommand(7);
```

### serial()

The serial should return a snake_case string that uniquely identifies this command.

```php
return 'get_digit_plus_one';
```

# Handler

The handlers job is to take a command, optionally extract its data and perform a task on it. It will then return the result back to the **Bus**. The interface exposes one method `execute`.

!!! important
    When using the concrete implementation of the **Bus** supplied with Hive, all handlers need to end with the word **Handler**. They are also are named after the command serials, but in UpperCamelCase notation. 

    For example, if a class returns the serial `get_digit_plus_one`, its handler would be `GetDigitPlusOneHandler`.

### execute(...)

Expects a `CommandInterface $command` and returns the result of an operation.

```php
$digit = $command->digit;
return (int) $digit + 1;
```