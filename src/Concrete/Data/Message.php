<?php

namespace R\Hive\Concrete\Data;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Data\ValidatorInterface;

class Message implements MessageInterface
{
    protected $message;
    protected $validator;

    public function __construct($message, ValidatorInterface $validator = null)
    {
        $this->message = $message;

        if ($validator !== null) {
            $this->attachValidator($validator);
        }
    }

    public function attachValidator(ValidatorInterface $validator)
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
