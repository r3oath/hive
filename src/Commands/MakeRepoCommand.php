<?php

namespace R\Hive\Commands;

use Symfony\Component\Console\Input\InputOption;

class MakeRepoCommand extends HiveGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:repo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive repo class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repo';

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
        if ($this->option('observatory')) {
            return __DIR__.'/stubs/repo-observatory.stub';
        } else {
            return __DIR__.'/stubs/repo-no-observatory.stub';
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
        return $rootNamespace.'\Lib\Repos';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['observatory', 'o', InputOption::VALUE_NONE, 'Add observatory support to this repo.'],
        ];
    }
}
