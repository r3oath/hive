<?php

namespace R\Hive\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class AssembleCommand extends Command
{
    protected $name = 'hive:assemble';

    protected $description = 'Create a new Hive resource collection for an instance.';

    public function fire()
    {
        $name = $this->argument('name');

        $this->call('hive:instance', ['name' => $name, '--eloquent');
        $this->call('hive:factory', ['name' => $name, '--validator');
        $this->call('hive:repo', ['name' => $name, '--observatory');
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the class.'],
        ];
    }
}