<?php

namespace R\Hive\Commands;

use Symfony\Component\Console\Input\InputOption;

class MakeCommandCommand extends HiveGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hive:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Hive command class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Command';

    /**
     * The compound command to fire after the parent succeeds.
     *
     * @var string
     */
    protected $compound = 'handler';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/command.stub';
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
        return $rootNamespace.'\Lib\Commands';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['handler', 'H', InputOption::VALUE_NONE, 'Create a handler for this command.'],
        ];
    }
}
