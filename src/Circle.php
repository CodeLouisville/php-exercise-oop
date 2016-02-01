<?php

class Circle extends Shape {

    const SHAPE_TYPE = 3;
    protected $radius;

/*
Constructor accepts a radius parameter and intializes $radius.
*/
    function __construct($radius) {
        $this->radius = $radius;
        parent::__construct();
    }

/*
area method to calculate and return the area of the circle (PI x r x r)
*/
    public function area() {
        $pi = pi();
        $area = $pi x pow($radius, 2);
        return $area;
    }

/*
getFullDescription method to return string describing the shape
*/
    public getFullDescription() {
        return 'Circle' . $this->id . ': ' . $this->name . ' - ' . $this->radius;
    }
}
