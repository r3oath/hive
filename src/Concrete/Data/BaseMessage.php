<?php

namespace R\Hive\Concrete\Data;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Data\GenericValidator as GenericValidatorContract;

class BaseMessage implements GenericMessageContract
{
    protected $message;
    protected $validator;

    public function __construct($message, GenericValidatorContract $validator = null)
    {
        $this->message = $message;

        if ($validator !== null) {
            $this->attachValidator($validator);
        }
    }

    public function attachValidator(GenericValidatorContract $validator)
    {
        $this->validator = $validator;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function hasValidator()
    {
        return $this->validator !== null;
    }
}
