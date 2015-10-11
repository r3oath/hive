<?php

namespace R\Hive\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeFactoryCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive factory class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Factory';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        if (parent::fire() !== false) {
            if ($this->option('validator')) {
                $name = $this->argument('name');
                $this->call('hive:validator', ['name' => $name]);
            }
        }
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('validator')) {
            return __DIR__.'/stubs/factory-validator.stub';
        } else {
            return __DIR__.'/stubs/factory-no-validator.stub';
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
        return $rootNamespace.'\Lib\Factories';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['validator', 'i', InputOption::VALUE_NONE, 'Create a new associated validator.'],
        ];
    }
}
