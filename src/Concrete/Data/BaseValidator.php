<?php

namespace R\Hive\Concrete\Data;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use R\Hive\Contracts\Data\GenericValidator as GenericValidatorContract;

class BaseValidator implements GenericValidatorContract
{
    protected $rules  = [];
    protected $errors = null;
    protected $factory;

    public function __construct(ValidationFactory $factory)
    {
        $this->factory = $factory;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return $this->errors !== null;
    }

    public function validate($attributes = [])
    {
        $validator = $this->factory->make($attributes, $this->rules);

        if ($validator->fails()) {
            $this->errors = $validator->errors();
        }

        return $this;
    }
}
