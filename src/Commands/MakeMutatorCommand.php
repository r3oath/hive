<?php

namespace R\Hive\Commands;

class MakeMutatorCommand extends HiveGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:mutator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive data mutator class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Mutator';

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
        if ($this->option('request')) {
            return __DIR__.'/stubs/mutator-request.stub';
        } else if ($this->option('clean')) {
            return __DIR__.'/stubs/mutator-clean.stub';
        } else {
            return __DIR__.'/stubs/mutator.stub';
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
        return $rootNamespace.'\Lib\Data';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['request', 'r', InputOption::VALUE_NONE, 'Create a Laravel request mutator.'],
            ['clean', 'c', InputOption::VALUE_NONE, 'Create a clean mutator.'],
        ];
    }
}
