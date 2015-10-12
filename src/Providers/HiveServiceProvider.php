<?php

namespace R\Hive\Providers;

use Illuminate\Support\ServiceProvider;
use R\Hive\Commands\AssembleCommand;
use R\Hive\Commands\MakeFactoryCommand;
use R\Hive\Commands\MakeInstanceCommand;
use R\Hive\Commands\MakeRepoCommand;
use R\Hive\Commands\MakeValidatorCommand;
use R\Hive\Commands\MakeControllerCommand;
use R\Hive\Commands\MakeCommandCommand;
use R\Hive\Commands\MakeHandlerCommand;

class HiveServiceProvider extends ServiceProvider
{
    protected $defer = true;

    protected $commands = [
        'Assemble'       => 'command.assemble',
        'MakeFactory'    => 'command.make.factory',
        'MakeInstance'   => 'command.make.instance',
        'MakeRepo'       => 'command.make.repo',
        'MakeValidator'  => 'command.make.validator',
        'MakeController' => 'command.make.controller',
        'MakeCommand'    => 'command.make.command',
        'MakeHandler'    => 'command.make.handler',
    ];

    public function register()
    {
        foreach (array_keys($this->commands) as $command) {
            $method = "register{$command}Command";

            call_user_func_array([$this, $method], []);
        }

        $this->commands(array_values($this->commands));
    }

    protected function registerAssembleCommand()
    {
        $this->app->singleton('command.assemble', function () {
            return new AssembleCommand();
        });
    }

    protected function registerMakeFactoryCommand()
    {
        $this->app->singleton('command.make.factory', function ($app) {
            return new MakeFactoryCommand($app['files']);
        });
    }

    protected function registerMakeInstanceCommand()
    {
        $this->app->singleton('command.make.instance', function ($app) {
            return new MakeInstanceCommand($app['files']);
        });
    }

    protected function registerMakeRepoCommand()
    {
        $this->app->singleton('command.make.repo', function ($app) {
            return new MakeRepoCommand($app['files']);
        });
    }

    protected function registerMakeValidatorCommand()
    {
        $this->app->singleton('command.make.validator', function ($app) {
            return new MakeValidatorCommand($app['files']);
        });
    }

    protected function registerMakeControllerCommand()
    {
        $this->app->singleton('command.make.controller', function ($app) {
            return new MakeControllerCommand($app['files']);
        });
    }

    protected function registerMakeCommandCommand()
    {
        $this->app->singleton('command.make.command', function ($app) {
            return new MakeCommandCommand($app['files']);
        });
    }

    protected function registerMakeHandlerCommand()
    {
        $this->app->singleton('command.make.handler', function ($app) {
            return new MakeHandlerCommand($app['files']);
        });
    }

    public function provides()
    {
        return array_values($this->commands);
    }
}
