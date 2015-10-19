<?php

use Mockery as m;
use R\Hive\Concrete\Data\Validator;

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testFailedValidation()
    {
        $errors = [
            'something went wrong... duh',
        ];

        $validator = m::mock(
            'Illuminate\Contracts\Validation\Validator',
            function ($mock) use ($errors) {
                $mock->shouldReceive('fails')->atLeast()->once()->andReturn(true);
                $mock->shouldReceive('errors')->atLeast()->once()->andReturn($errors);
            });

        $factory = m::mock(
            'Illuminate\Contracts\Validation\Factory',
            function ($mock) use ($validator) {
                $mock->shouldReceive('make')->atLeast()->once()->andReturn($validator);
            });

        $dummy_validator = m::mock('R\Hive\Concrete\Data\Validator[getCreateRules]', [$factory], function ($mock) {
            $mock->shouldReceive('getCreateRules')->atLeast()->once()->andReturn([]);
        });

        $dummy_mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface', function ($mock) {
            $mock->shouldReceive('all')->atLeast()->once()->andReturn(['foo' => 'bar']);
        });

        $dummy_validator->validate($dummy_mutator);

        $this->assertEquals(true, $dummy_validator->hasErrors());
        $this->assertEquals($errors, $dummy_validator->getErrors());
    }

    public function testSuccessfulUpdateValidation()
    {
        $validator = m::mock(
            'Illuminate\Contracts\Validation\Validator',
            function ($mock) {
                $mock->shouldReceive('fails')->atLeast()->once()->andReturn(false);
            });

        $factory = m::mock(
            'Illuminate\Contracts\Validation\Factory',
            function ($mock) use ($validator) {
                $mock->shouldReceive('make')->atLeast()->once()->andReturn($validator);
            });

        $dummy_validator = m::mock('R\Hive\Concrete\Data\Validator[getUpdateRules]', [$factory], function ($mock) {
            $mock->shouldReceive('getUpdateRules')->atLeast()->once()->andReturn([]);
        });

        $dummy_mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface', function ($mock) {
            $mock->shouldReceive('all')->atLeast()->once()->andReturn(['foo' => 'bar']);
        });

        $dummy_validator->markAsUpdate()->validate($dummy_mutator);

        $this->assertEquals(false, $dummy_validator->hasErrors());
    }

    public function testSuccessfulValidation()
    {
        $validator = m::mock(
            'Illuminate\Contracts\Validation\Validator',
            function ($mock) {
                $mock->shouldReceive('fails')->atLeast()->once()->andReturn(false);
            });

        $factory = m::mock(
            'Illuminate\Contracts\Validation\Factory',
            function ($mock) use ($validator) {
                $mock->shouldReceive('make')->atLeast()->once()->andReturn($validator);
            });

        $dummy_validator = m::mock('R\Hive\Concrete\Data\Validator[getCreateRules]', [$factory], function ($mock) {
            $mock->shouldReceive('getCreateRules')->atLeast()->once()->andReturn([]);
        });

        $dummy_mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface', function ($mock) {
            $mock->shouldReceive('all')->atLeast()->once()->andReturn(['foo' => 'bar']);
        });

        $dummy_validator->validate($dummy_mutator);

        $this->assertEquals(false, $dummy_validator->hasErrors());
    }

    /**
     * @expectedException R\Hive\Concrete\Exceptions\ValidatorRulesNotSuppliedException
     * @expectedExceptionMessageRegExp #create.*#
     */
    public function testValidatorCreateRulesNotSuppliedException()
    {
        $validator = m::mock('Illuminate\Contracts\Validation\Validator');
        $factory = m::mock('Illuminate\Contracts\Validation\Factory');
        $dummy_mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface', function ($mock) {
            $mock->shouldReceive('all')->atLeast()->once();
        });

        $dummy_validator = new Validator($factory);
        $dummy_validator->validate($dummy_mutator);
    }

    /**
     * @expectedException R\Hive\Concrete\Exceptions\ValidatorRulesNotSuppliedException
     * * @expectedExceptionMessageRegExp #update.*#
     */
    public function testValidatorUpdateRulesNotSuppliedException()
    {
        $validator = m::mock('Illuminate\Contracts\Validation\Validator');
        $factory = m::mock('Illuminate\Contracts\Validation\Factory');
        $dummy_mutator = m::mock('R\Hive\Contracts\Data\MutatorInterface', function ($mock) {
            $mock->shouldReceive('all')->atLeast()->once();
        });

        $dummy_validator = new Validator($factory);
        $dummy_validator->markAsUpdate()->validate($dummy_mutator);
    }
}
