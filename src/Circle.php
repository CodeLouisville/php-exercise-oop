<?php

  require_once("Shape.php");
  
  class Circle extends Shape {
    
    // class constants
    const SHAPE_TYPE = 3;
    
    // property declarations
    protected $radius;

    // method declarations
    public function __construct( $radius ) {      
      parent::__construct();
    }
    
    public function area() {
      return M_PI * $this->radius * $this->radius;
    }
     
    public function getFullDescription() {
      return "Circle<#" . $this->id . ">: " . $this->name . " - " . $this->radius;
    }
      
  } // end class

?>
