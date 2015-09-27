<?php

namespace R\Hive\Contracts\Data;

interface GenericValidator
{
    public function validate($attributes = []);

    public function hasErrors();

    public function getErrors();
}
