<?php
require_once 'Shape.php';

class ShapeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider areaData
     */
    public function test_area($a, $b, $expected)
    {
        $shape = new Shape($a, $b);
        $this->assertEquals($expected, $shape->area());
    }

    public function areaData()
    {
        return [
            [1, 1, 1],
            [2, 1, 2],
            [2, 2, 4],
            [3, 7, 21]
        ];
    }

    public function test_name_property_visibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('name');

        $this->assertTrue($property->isPublic());
    }

    public function test_length_property_visibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('length');

        $this->assertTrue($property->isProtected());
    }

    public function test_width_property_visibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('width');

        $this->assertTrue($property->isProtected());
    }

    public function test_id_property_visibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('id');

        $this->assertTrue($property->isPrivate());
    }

    public function test_setName() {
        $shape = new Shape(0, 0);
        $this->assertNull($shape->name);

        $name = str_shuffle(time());
        $shape->setName($name);
        $this->assertEquals($name, $shape->name);
    }

    public function test_getName() {
        $shape = new Shape(0, 0);
        $this->assertNull($shape->name);

        $name = str_shuffle(time());
        $shape->name = $name;
        $this->assertEquals($name, $shape->getName());
    }

    public function test_shape_type() {
        $this->assertSame(1, Shape::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 1', Shape::getTypeDescription());
    }

    public function test_getId() {
        $shape = new Shape(0, 0);

        $this->assertRegExp('/[0-9a-f]{13}/', $shape->getId());
    }

    public function test_getFullDescription() {
        $shape = new Shape(4, 5);

        $id = $shape->getId();
        $name = str_shuffle(time());
        $shape->name = $name;

        $this->assertEquals('Shape<#' . $id . '>: ' . $name . ' - 4 x 5', $shape->getFullDescription());
    }
}
