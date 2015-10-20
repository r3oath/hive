<?php

use Mockery as m;
use R\Hive\Concrete\Factories\Factory;
use R\Hive\Contracts\Data\MutatorInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testFactoryNotifySuccessOnCreation()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface', function ($mock) use ($instance) {
            $mock->shouldReceive('notifyOnCreateSucceeded')->once()->with($instance);
        });

        $factory->testReportSuccess($instance, false, $observatory);
    }

    public function testFactoryNotifySuccessOnUpdate()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface', function ($mock) use ($instance) {
            $mock->shouldReceive('notifyOnUpdateSucceeded')->once()->with($instance);
        });

        $factory->testReportSuccess($instance, true, $observatory);
    }

    public function testFactoryValidateCreateWithErrors()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface', function ($mock) use ($instance) {
            $mock->shouldReceive('notifyOnCreateFailed')->once();
        });
        $validator = m::mock('R\Hive\Contracts\Data\ValidatorInterface', function ($mock) use ($mutator) {
            $mock->shouldReceive('validate')->once()->with($mutator);
            $mock->shouldReceive('hasErrors')->once()->andReturn(true);
        });

        $factory->testValidate($validator, $mutator, false, $observatory);
    }

    public function testFactoryValidateCreateWithoutErrors()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface');
        $validator = m::mock('R\Hive\Contracts\Data\ValidatorInterface', function ($mock) use ($mutator) {
            $mock->shouldReceive('validate')->once()->with($mutator);
            $mock->shouldReceive('hasErrors')->once()->andReturn(false);
        });

        $expected = null;
        $result = $factory->testValidate($validator, $mutator, false, $observatory);

        $this->assertEquals($expected, $result);
    }

    public function testFactoryValidateUpdateWithErrors()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface', function ($mock) use ($instance) {
            $mock->shouldReceive('notifyOnUpdateFailed')->once();
        });
        $validator = m::mock('R\Hive\Contracts\Data\ValidatorInterface', function ($mock) use ($mutator) {
            $mock->shouldReceive('markAsUpdate->validate')->once()->with($mutator);
            $mock->shouldReceive('hasErrors')->once()->andReturn(true);
        });

        $factory->testValidate($validator, $mutator, true, $observatory);
    }

    public function testFactoryValidateUpdateWithoutErrors()
    {
        $factory = new DummyFactory();
        $instance = m::mock('R\Hive\Contracts\Instances\InstanceInterface');
        $mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface');
        $observatory = m::mock('R\Hive\Contracts\Observers\ObservatoryInterface');
        $validator = m::mock('R\Hive\Contracts\Data\ValidatorInterface', function ($mock) use ($mutator) {
            $mock->shouldReceive('markAsUpdate->validate')->once()->with($mutator);
            $mock->shouldReceive('hasErrors')->once()->andReturn(false);
        });

        $expected = null;
        $result = $factory->testValidate($validator, $mutator, true, $observatory);

        $this->assertEquals($expected, $result);
    }
}

class DummyFactory extends Factory
{
    public function testReportSuccess($instance, $is_update, $observatory)
    {
        $this->reportSuccess($instance, $is_update, $observatory);
    }

    public function testValidate($validator, $mutator, $is_update, $observatory)
    {
        return $this->validate($validator, $mutator, $is_update, $observatory);
    }

    public function make(
        OnCreateInterface $handler,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    ) {
        //
    }

    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    ) {
        //
    }
}
