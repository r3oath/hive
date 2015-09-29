<?php

use Mockery as m;
use R\Hive\Concrete\Data\BaseMessage;

class BaseMessageTest extends PHPUnit_Framework_TestCase
{
    public function testMessageAndValidatorConstruct()
    {
        $validator = m::mock('R\Hive\Contracts\Data\GenericValidator');

        $test_message = 'test';
        $message      = new BaseMessage($test_message, $validator);

        $this->assertEquals(true, $message->hasValidator());
        $this->assertEquals($validator, $message->getValidator());
        $this->assertEquals($test_message, $message->getMessage());
    }

    public function testMessageOnlyConstruct()
    {
        $test_message = 'test';
        $message      = new BaseMessage($test_message);

        $this->assertEquals(false, $message->hasValidator());
        $this->assertEquals($test_message, $message->getMessage());
    }
}
