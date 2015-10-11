<?php

namespace R\Hive\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeInstanceCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:instance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive instance class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Instance';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        parent::fire();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('eloquent')) {
            return __DIR__.'/stubs/instance-eloquent.stub';
        } else {
            return __DIR__.'/stubs/instance-no-eloquent.stub';
        }
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['eloquent', 'e', InputOption::VALUE_NONE, 'Extend the eloquent model class.'],
        ];
    }
}
