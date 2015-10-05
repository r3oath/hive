<?php

namespace R\Hive\Concrete\Exceptions;

use R\Hive\Concrete\Exceptions\DomainException;
use R\Hive\Contracts\Data\Validator as ValidatorContract;

class ValidatorCreateRulesNotSuppliedException extends DomainException
{
    public function __construct(ValidatorContract $validator)
    {
        $name    = get_class($validator);
        $message = sprintf('Validator [%s] has no supplied create rules, did you override getCreateRules()?.', $name);
        parent::__construct($message);
    }
}
