<?php
require_once 'Shape.php';
require 'Rectangle.php';

class RectangleTest extends PHPUnit_Framework_TestCase
{
    public function test_inherits_from_shape()
    {
        $class = new ReflectionClass('Rectangle');

        $this->assertTrue($class->isSubclassOf('Shape'));
    }

    public function test_shape_type() {
        $this->assertSame(2, Rectangle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 2', Rectangle::getTypeDescription());
    }
}
