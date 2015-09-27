<?php

namespace R\Hive\Concrete\Data;

use R\Hive\Contracts\Data\GenericValidator as GenericValidatorContract;
use Validator;

class BaseValidator implements GenericValidatorContract
{
    protected $rules;
    protected $errors = null;

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
        $v = Validator::make($attributes, $this->rules);

        if ($v->fails()) {
            $this->errors = $v->errors();
        }
    }
}
