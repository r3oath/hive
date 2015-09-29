<?php

use Mockery as m;
use R\Hive\Concrete\Observers\BaseObservatory;

class BaseObservatoryTest extends PHPUnit_Framework_TestCase
{
    protected $observer;
    protected $observatory;

    public function __construct()
    {
        $this->observatory = new BaseObservatory;
        $this->observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver', function ($mock) {
            $mock->shouldReceive('serial')->andReturn('dummy');
        });
    }

    public function tearDown()
    {
        m::close();
    }

    public function testObservatoryNotifiesObserverOnCreateFailed()
    {
        $observatory = new BaseObservatory;
        $message     = m::mock('R\Hive\Contracts\Data\GenericMessage');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\CreateHandler', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('createFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnCreateFailed($message);
    }

    public function testObservatoryNotifiesObserverOnCreateSucceeded()
    {
        $observatory = new BaseObservatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\GenericInstance');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\CreateHandler', function ($mock) use ($instance) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('createSucceeded')->once()->with($instance);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnCreateSucceeded($instance);
    }

    public function testObservatoryNotifiesObserverOnDestroyFailed()
    {
        $observatory = new BaseObservatory;
        $message     = m::mock('R\Hive\Contracts\Data\GenericMessage');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\DestroyHandler', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('destroyFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnDestroyFailed($message);
    }

    public function testObservatoryNotifiesObserverOnDestroySucceeded()
    {
        $observatory = new BaseObservatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\GenericInstance');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\DestroyHandler', function ($mock) use ($instance) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('destroySucceeded')->once()->with($instance);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnDestroySucceeded($instance);
    }

    public function testObservatoryNotifiesObserverOnUpdateFailed()
    {
        $observatory = new BaseObservatory;
        $message     = m::mock('R\Hive\Contracts\Data\GenericMessage');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\UpdateHandler', function ($mock) use ($message) {
            $mock->shouldReceive('serial')->andReturn('dummy');
            $mock->shouldReceive('updateFailed')->once()->with($message);
        });

        $observatory->registerObserver($observer);
        $observatory->notifyOnUpdateFailed($message);
    }

    public function testObservatoryNotifiesObserverOnUpdateSucceeded()
    {
        $observatory = new BaseObservatory;
        $instance    = m::mock('R\Hive\Contracts\Instances\GenericInstance');
        $observer    = m::mock('R\Hive\Contracts\Observers\GenericObserver, R\Hive\Contracts\Handlers\UpdateHandler', function ($mock) use ($instance) {
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
        $observer1 = m::mock('R\Hive\Contracts\Observers\GenericObserver', function ($mock) {
            $mock->shouldReceive('serial')->atLeast()->times(1)->andReturn('dummy1');
        });

        $observer2 = m::mock('R\Hive\Contracts\Observers\GenericObserver', function ($mock) {
            $mock->shouldReceive('serial')->atLeast()->times(1)->andReturn('dummy2');
        });

        $this->observatory->registerObserver($observer1);
        $this->observatory->registerObserver($observer2);
        $this->observatory->unregisterObserver($observer1);

        $observer_out = $this->observatory->getObservers();
        $this->assertEquals($observer2->serial(), $observer_out[0]->serial());
    }
}
