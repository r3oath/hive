<?php

namespace R\Hive\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeValidatorCommand extends GeneratorCommand
{
    protected function getPath($name)
    {
        $name = str_replace($this->laravel->getNamespace(), '', $name);

        // Add the class type to the file name.
        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).$this->type.'.php';
    }
}
