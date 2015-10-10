# Message

A message carries a description of something that went wrong and optionally a reference to a validator. The interface exposes the methods `getMessage`, `attachValidator`, `hasValidator` and `getValidator`

!!! hint
    A concrete implementation comes supplied with Hive. Please see `src/Concrete/Data/Message`

### getMessage()

Returns this associated message.

```php
return $this->message;
```

### attachValidator(...)

Expects a `ValidatorInterface $validator`. This will attach the specified validator to the message to be passed along with it.

```php
$this->validator = $validator;
```

### hasValidator()

Returns true if a validator is attached to this message.

```php
return $this->validator !== null;
```

### getValidator()

Returns the attached validator.

```php
return $this->validator;
```

# Validator

!!! hint
    A concrete implementation comes supplied with Hive. Please see `src/Concrete/Data/Validator`. It'll need to be extended though for each instance type, defining the specific rules associated with it. So for the book example, you'd have a **BookValidator**.

A validator validates given attributes for an instance type and returns any errors it may have encountered while doing so. The interface exposes the methods `validate`, `hasErrors`, `getErrors`, `getCreateRules`, `getUpdateRules` and `markAsUpdate`.

### instantiation(...)

!!! note
    In the concrete implementation supplied with Hive, it uses the illuminate validation factory `use Illuminate\Contracts\Validation\Factory as ValidationFactory;`

```php
protected $errors = null;
protected $factory = null;
protected $update = false;

public function __construct(ValidationFactory $factory)
{
    $this->factory = $factory;
}
```

### validate(...)

Expects an array of attributes `$attributes = []` to validate. This method should check with the validation is for an update. If errors occur, they'll be set on the class. It should return itself for easy chaining.

```php
$validator = $this->update
? $this->factory->make($attributes, $this->getUpdateRules())
: $this->factory->make($attributes, $this->getCreateRules());

if ($validator->fails()) {
    $this->errors = $validator->errors();
}

// Reset the update flag back to it's default value.
$this->update = false;

return $this;
```

### hasErrors()

Returns true if any errors have occurred during validation.

```php
return $this->errors !== null;
```

### getErrors()

Returns the errors encountered during validation.

```php
return $this->errors;
```

### getCreateRules()

Gets the rules needed during creation of an instance.

```php
return ['name' => 'required'];
```

!!! warning
    If using the concrete implementation of this class supplied by Hive and this method isn't extended, it will throw an exception `ValidatorRulesNotSuppliedException`

### getUpdateRules()

Gets the rules needed during the modification of an instance.

```php
return ['name' => 'sometimes|required'];
```

!!! warning
    If using the concrete implementation of this class supplied by Hive and this method isn't extended, it will throw an exception `ValidatorRulesNotSuppliedException`

### markAsUpdate()

Mark the validation to happen next as an update. This method should generally return the validator class for easy chaining. Eg: `$bookValidator->markAsUpdate()->validate([...]);`

```php
$this->update = true;
return $this;
```
