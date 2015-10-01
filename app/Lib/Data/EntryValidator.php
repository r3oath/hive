<?php

namespace App\Lib\Data;

use R\Hive\Concrete\Data\BaseValidator;

class EntryValidator extends BaseValidator
{
    // Creating a validator is as simple as extending the BaseValidator
    // and specifying the rules for this instance.
    protected $rules = [
        'name'    => 'required|string|min:2',
        'content' => 'required|string|max:140',
    ];
}
