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

        $dummy_validator = new Validator($factory);
        $dummy_validator->validate(['foo' => 'bar']);

        $this->assertEquals(true, $dummy_validator->hasErrors());
        $this->assertEquals($errors, $dummy_validator->getErrors());
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

        $dummy_validator = new Validator($factory);
        $dummy_validator->validate(['foo' => 'bar']);

        $this->assertEquals(false, $dummy_validator->hasErrors());
    }
}
