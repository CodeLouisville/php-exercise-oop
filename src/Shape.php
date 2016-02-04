<?php

class Shape {

    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }

/*
Getter and Setter methods for $name property
*/
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
        return $name;
    }

/*
Getter method for $id property
*/
    function getId() {
        return $this->id;
    }

/*
Area method to calculate and return the area of the Shape object
*/
    public function area() {
        $area = $this->length * $this->width;
        return $area;
    }

/*
getTypeDescription method to return the shape type
*/
    public static function getTypeDescription() {
        return 'Type: ' . static::SHAPE_TYPE;
    }

/*
getFullDescription method to return string describing the shape
*/
    public function getFullDescription() {
        return get_class($this) . '<#' . $this->id . '>: ' . $this->name . ' - ' . $this->length . ' x ' . $this->width;
    }

}
