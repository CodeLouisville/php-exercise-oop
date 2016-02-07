<?php

  class Shape {
    
    // class constants
    const SHAPE_TYPE = 1;
    
    // property declarations
    public $name;
    protected $length;
    protected $width;
    private $id;
     
    // method declarations   
    public function __construct ( $length = 0, $width = 0 ) {     
      $this->length = $length;
      $this->width = $width;      
      $this->id = uniqid();
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function setName( $name ) {
      $this->name = $name;
    }
    
    public function getId() {
      return $this->id;
    }
    
    public function area() {
      return $this->length * $this->width;
    }
    
    static public function getTypeDescription() {
      return "Type: " . static::SHAPE_TYPE;
    }
    
    public function getFullDescription() {
      switch (static::SHAPE_TYPE) {
        case 1: // case of SHAPE
            $shapeName = "Shape";
            $postfix = "<#" . $this->id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;
            break;
        case 2: // case of RECTANGLE
            $shapeName = "Rectangle";
            $postfix = "<#" . $this->id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;            
            break;
        case 3: // case of CIRCLE
            $shapeName = "Circle";
            $postfix = "<#" . $this->id . ">: " . $this->name . " - " . $this->radius;
            break;
      } // end switch
      
      return $shapeName . $postfix;
    }
    
  } // end class

?>
