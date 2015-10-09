<?php

namespace R\Hive\Concrete\Commands;

use R\Hive\Concrete\Exceptions\NoSupportedHandlerFoundException;
use R\Hive\Contracts\Commands\BusInterface;
use R\Hive\Contracts\Commands\CommandInterface;

class Bus implements BusInterface
{
    public function execute(CommandInterface $command)
    {
        return $this
            ->resolveHandler($command->serial())
            ->execute($command);
    }

    public function handlersNamespace()
    {
        return 'App\Lib\Commands\Handlers';
    }

    public function resolveHandler($serial)
    {
        $class = $this->getClassNameFromSerial($serial);
        if (class_exists($class)) {
            return new $class();
        }

        throw new NoSupportedHandlerFoundException($serial);
    }

    protected function getClassNameFromSerial($serial)
    {
        $parts = explode('_', $serial);
        $class = '';

        foreach ($parts as $part) {
            $class .= ucfirst($part);
        }

        return $this->handlersNamespace().'\\'.$class.'Handler';
    }
}
