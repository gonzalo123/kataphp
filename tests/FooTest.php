<?php

class FooTest extends \PHPUnit_Framework_TestCase
{
    function testBar()
    {
        $foo = new Foo();
        $this->assertEquals(0, $foo->bar(), "first test must be red");
    }
}
