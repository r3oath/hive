<?php

use Mockery as m;
use R\Hive\Concrete\Observers\Observatory;

class ObservatoryTest extends PHPUnit_Framework_TestCase
{
    protected $observer;
    protected $observatory;

    public function __construct()
    {
        $this->observatory = new Observatory;
        $this->observer    = m::mock('R\Hive\Contracts\Observers\Observer', function ($mock) {
            $mock->shouldReceive('serial')->andReturn('dummy');
        });
    }

    public function tearDown()
    {
        m::close();
    }

    public function testObservatoryNotifiesObserverOnCreateFailed()
    {
        $observatory = new Observatory;
        $message     = m::mock('R\Hive\Contracts\Data\Message');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnCreate', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('createFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnCreateFailed($message);
    }

    public function testObservatoryNotifiesObserverOnCreateSucceeded()
    {
        $observatory = new Observatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\Instance');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnCreate', function ($mock) use ($instance) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('createSucceeded')->once()->with($instance);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnCreateSucceeded($instance);
    }

    public function testObservatoryNotifiesObserverOnDestroyFailed()
    {
        $observatory = new Observatory;
        $message     = m::mock('R\Hive\Contracts\Data\Message');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnDestroy', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('destroyFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnDestroyFailed($message);
    }

    public function testObservatoryNotifiesObserverOnDestroySucceeded()
    {
        $observatory = new Observatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\Instance');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnDestroy', function ($mock) use ($instance) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('destroySucceeded')->once()->with($instance);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnDestroySucceeded($instance);
    }

    public function testObservatoryNotifiesObserverOnUpdateFailed()
    {
        $observatory = new Observatory;
        $message     = m::mock('R\Hive\Contracts\Data\Message');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnUpdate', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('updateFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnUpdateFailed($message);
    }

    public function testObservatoryNotifiesObserverOnUpdateSucceeded()
    {
        $observatory = new Observatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\Instance');
        $observer    = m::mock('R\Hive\Contracts\Observers\Observer, R\Hive\Contracts\Handlers\OnUpdate', function ($mock) use ($instance) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('updateSucceeded')->once()->with($instance);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnUpdateSucceeded($instance);
    }

    public function testRegisterObserver()
    {
        $this->observatory->registerObserver($this->observer);
        $this->assertCount(1, $this->observatory->getObservers());
    }

    /**
     * @depends testRegisterObserver
     */
    public function testUnregisterObserver()
    {
        $this->observatory->unregisterObserver($this->observer);
        $this->assertCount(0, $this->observatory->getObservers());
    }

    /**
     * @depends testUnregisterObserver
     */
    public function testUnregisterObserverBySerial()
    {
        $observer1 = m::mock('R\Hive\Contracts\Observers\Observer', function ($mock) {
            $mock->shouldReceive('serial')->atLeast()->times(1)->andReturn('dummy1');
        });

        $observer2 = m::mock('R\Hive\Contracts\Observers\Observer', function ($mock) {
            $mock->shouldReceive('serial')->atLeast()->times(1)->andReturn('dummy2');
        });

        $this->observatory->registerObserver($observer1);
        $this->observatory->registerObserver($observer2);
        $this->observatory->unregisterObserver($observer1);

        $observer_out = $this->observatory->getObservers();
        $this->assertEquals($observer2->serial(), $observer_out[0]->serial());
    }
}
