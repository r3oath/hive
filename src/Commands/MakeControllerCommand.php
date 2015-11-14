<?php

namespace R\Hive\Commands;

use Symfony\Component\Console\Input\InputOption;

class MakeControllerCommand extends HiveGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive controller class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

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
        return __DIR__.'/stubs/controller.stub';
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
        if ($this->option('subfolder')) {
            return $rootNamespace.'\Http\Controllers\\'.$this->option('subfolder');
        }

        return $rootNamespace.'\Http\Controllers';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['subfolder', 's', InputOption::VALUE_OPTIONAL, 'The subfolder to place the controller into.'],
        ];
    }
}
