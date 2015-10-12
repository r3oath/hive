<?php

namespace R\Hive\Commands;

use Symfony\Component\Console\Input\InputOption;

class MakeFactoryCommand extends HiveGeneratorCommand
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
     * The compound command to fire after the parent succeeds.
     *
     * @var string
     */
    protected $compound = 'validator';

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
     * @param string $rootNamespace
     *
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
