<?php

namespace R\Hive\Concrete\Data;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use R\Hive\Concrete\Exceptions\ValidatorCreateRulesNotSuppliedException;
use R\Hive\Concrete\Exceptions\ValidatorUpdateRulesNotSuppliedException;
use R\Hive\Contracts\Data\Validator as ValidatorContract;

class Validator implements ValidatorContract
{
    protected $errors  = null;
    protected $factory = null;
    protected $update  = false;

    public function __construct(ValidationFactory $factory)
    {
        $this->factory = $factory;
    }

    public function getCreateRules()
    {
        throw new ValidatorCreateRulesNotSuppliedException($this);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getUpdateRules()
    {
        throw new ValidatorUpdateRulesNotSuppliedException($this);
    }

    public function hasErrors()
    {
        return $this->errors !== null;
    }

    public function isUpdate()
    {
        $this->update = true;
        return $this;
    }

    public function validate($attributes = [])
    {
        $validator = $this->update
        ? $this->factory->make($attributes, $this->getUpdateRules())
        : $this->factory->make($attributes, $this->getCreateRules());

        if ($validator->fails()) {
            $this->errors = $validator->errors();
        }

        return $this;
    }
}
