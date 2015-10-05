<?php

namespace App\Lib\Data;

use R\Hive\Concrete\Data\Validator;

class EntryValidator extends Validator
{
    // Creating a validator is as simple as extending the Validator
    // and specifying the rules for this instance.
    protected $rules = [
        'name'    => 'required|string|min:2',
        'content' => 'required|string|max:140',
    ];
}
