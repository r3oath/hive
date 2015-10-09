<?php

use Mockery as m;
use R\Hive\Concrete\Data\Message;

class MessageTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testMessageAndValidatorConstruct()
    {
        $validator = m::mock('R\Hive\Contracts\Data\Validator');

        $test_message = 'test';
        $message = new Message($test_message, $validator);

        $this->assertEquals(true, $message->hasValidator());
        $this->assertEquals($validator, $message->getValidator());
        $this->assertEquals($test_message, $message->getMessage());
    }

    public function testMessageOnlyConstruct()
    {
        $test_message = 'test';
        $message = new Message($test_message);

        $this->assertEquals(false, $message->hasValidator());
        $this->assertEquals($test_message, $message->getMessage());
    }
}
