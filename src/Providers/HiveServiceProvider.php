<?php

namespace R\Hive\Providers;

use Illuminate\Support;

class HiveServiceProvider extends ServiceProvider
{
    protected $defer = true;

    protected $commands = [
        'Assemble' => 'command.assemble',
        'MakeFactory' => 'command.make.factory',
        'MakeInstance' => 'command.make.instance',
        'MakeRepo' => 'command.make.repo',
        'MakeValidator' => 'command.make.validator',
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

    public function provides()
    {
        return array_values($this->commands);
    }
}
