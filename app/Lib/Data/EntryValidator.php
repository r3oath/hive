<?php

namespace App\Lib\Data;

use R\Hive\Concrete\Data\Validator;

class EntryValidator extends Validator
{
    public function getCreateRules()
    {
        return $this->generateRules();
    }

    public function getUpdateRules()
    {
        return $this->generateRules(true);
    }

    protected function generateRules($is_update = false)
    {
        return [
            'name'    => ($is_update ? 'sometimes|' : '') . 'required|string|min:2',
            'content' => ($is_update ? 'sometimes|' : '') . 'required|string|max:140',
        ];
    }
}
