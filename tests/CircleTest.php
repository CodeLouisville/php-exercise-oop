<?php
require_once 'Shape.php';
require 'Circle.php';

class CircleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider areaData
     */
    public function test_area($r, $expected)
    {
        $circle = new Circle($r);
        $this->assertEquals($expected, round($circle->area(), 2));
    }

    public function areaData()
    {
        return [
            [1, 3.14],
            [2, 12.57],
            [3.5, 38.48],
            [9, 254.47]
        ];
    }

    public function test_radius_property_visibility()
    {
        $class = new ReflectionClass('Circle');
        $property = $class->getProperty('radius');

        $this->assertTrue($property->isProtected());
    }

    public function test_inherits_from_shape()
    {
        $class = new ReflectionClass('Circle');

        $this->assertTrue($class->isSubclassOf('Shape'));
    }

    public function test_shape_type() {
        $this->assertSame(3, Circle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 3', Circle::getTypeDescription());
    }
}
