<?php

use Mockery as m;
use R\Hive\Concrete\Commands\Bus;

class BusTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testHandlerExecutesCommand()
    {
        $expected_result = 'success';

        $handler = m::mock(
            'R\Hive\Concrete\Contracts\Handlers\Handler',
            function ($mock) use ($expected_result) {
                $mock->shouldReceive('execute')->atLeast()->once()->andReturn($expected_result);
            });

        $bus = m::mock(
            'R\Hive\Concrete\Commands\Bus[resolveHandler]',
            function ($mock) use ($handler) {
                $mock->shouldReceive('resolveHandler')->atLeast()->once()->andReturn($handler);
            });

        $command = m::mock(
            'R\Hive\Contracts\Commands\Command',
            function ($mock) {
                $mock->shouldReceive('serial')->atLeast()->once()->andReturn('');
            });

        $actual_result = $bus->execute($command);

        $this->assertEquals($expected_result, $actual_result);
    }

    /**
     * @expectedException R\Hive\Concrete\Exceptions\NoSupportedHandlerFoundException
     */
    public function testNoSupportedHandlerFoundException()
    {
        $bus     = new Bus;
        $command = m::mock(
            'R\Hive\Contracts\Commands\Command',
            function ($mock) {
                $mock->shouldReceive('serial')->atLeast()->once()->andReturn('not_valid');
            });

        $result = $bus->execute($command);
    }

    public function testNullCommandHandler()
    {
        $bus = m::mock(
            'R\Hive\Concrete\Commands\Bus[handlersNamespace]',
            function ($mock) {
                $mock->shouldReceive('handlersNamespace')->atLeast()->once()->andReturn('R\Hive\Concrete\Commands\Handlers');
            });

        $command = m::mock(
            'R\Hive\Contracts\Commands\Command',
            function ($mock) {
                $mock->shouldReceive('serial')->atLeast()->once()->andReturn('');
            });

        $result = $bus->execute($command);

        $this->assertEquals(null, $result);
    }
}
