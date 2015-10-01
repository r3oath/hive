<?php

namespace App\Lib\Data;

use R\Hive\Concrete\Data\BaseValidator;

class EntryValidator extends BaseValidator
{
    protected $rules = [
        'name'    => 'required|string|min:2',
        'content' => 'required|string|max:140',
    ];
}
