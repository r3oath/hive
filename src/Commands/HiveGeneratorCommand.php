<?php

namespace R\Hive\Commands;

use Illuminate\Console\GeneratorCommand;

class HiveGeneratorCommand extends GeneratorCommand
{
    protected $compound = null;

    protected function getPath($name)
    {
        $name = str_replace($this->laravel->getNamespace(), '', $name);

        // Add the class type to the file name.
        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).$this->type.'.php';
    }

    protected function getStub()
    {
        return;
    }

    public function fire()
    {
        if ($this->compound !== null) {
            if (parent::fire() !== false) {
                if ($this->option($this->compound)) {
                    $name = $this->argument('name');
                    $this->call("hive:{$this->compound}", ['name' => $name]);
                }
            }
        } else {
            parent::fire();
        }
    }
}
