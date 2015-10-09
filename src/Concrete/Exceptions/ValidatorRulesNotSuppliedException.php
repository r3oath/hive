<?php

namespace R\Hive\Concrete\Exceptions;

use R\Hive\Contracts\Data\ValidatorInterface;

class ValidatorRulesNotSuppliedException extends DomainException
{
    public $rules;
    public $name;

    public function __construct(ValidatorInterface $validator, $rules)
    {
        $this->name = get_class($validator);
        $this->rules = $rules;

        $message = sprintf(
            'Validator [%s] has no supplied %s rules.',
            $this->name,
            $this->rules
        );
        parent::__construct($message);
    }
}
