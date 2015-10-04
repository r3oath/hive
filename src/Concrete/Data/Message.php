<?php

namespace R\Hive\Concrete\Data;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Data\Validator as ValidatorContract;

class Message implements MessageContract
{
    protected $message;
    protected $validator;

    public function __construct($message, ValidatorContract $validator = null)
    {
        $this->message = $message;

        if ($validator !== null) {
            $this->attachValidator($validator);
        }
    }

    public function attachValidator(ValidatorContract $validator)
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
