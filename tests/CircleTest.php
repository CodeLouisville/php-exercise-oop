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
        $this->assertEquals('Shape', get_parent_class('Rectangle'));
    }

    public function test_shape_type() {
        $this->assertSame(3, Circle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 3', Circle::getTypeDescription());
    }

    public function test_getFullDescription() {
        $circle = new Circle(13);

        $id = $circle->getId();
        $name = str_shuffle(time());
        $circle->name = $name;

        $this->assertEquals('Circle<#' . $id . '>: ' . $name . ' - 13', $circle->getFullDescription());
    }
}
