<?php

namespace R\Hive\Concrete\Data;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use R\Hive\Concrete\Exceptions\ValidatorRulesNotSuppliedException;
use R\Hive\Contracts\Data\ValidatorInterface;
use R\Hive\Contracts\Data\MutatorInterface;

class Validator implements ValidatorInterface
{
    protected $errors = null;
    protected $factory = null;
    protected $update = false;

    public function __construct(ValidationFactory $factory)
    {
        $this->factory = $factory;
    }

    public function getCreateRules()
    {
        throw new ValidatorRulesNotSuppliedException($this, 'create');
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getUpdateRules()
    {
        throw new ValidatorRulesNotSuppliedException($this, 'update');
    }

    public function hasErrors()
    {
        return $this->errors !== null;
    }

    public function markAsUpdate()
    {
        $this->update = true;

        return $this;
    }

    public function validate(MutatorInterface $mutator)
    {
        $validator = $this->update
        ? $this->factory->make($mutator->all(), $this->getUpdateRules())
        : $this->factory->make($mutator->all(), $this->getCreateRules());

        if ($validator->fails()) {
            $this->errors = $validator->errors();
        }

        // Reset the update flag back to it's default value.
        $this->update = false;

        return $this;
    }
}
