<?php

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    function testBar()
    {
        $foo = new Foo();
        $this->assertEquals(0, $foo->bar(), "first test must be red");
    }
}
