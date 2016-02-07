<?php

  class Circle extends Shape {
    
    // class constants
    const SHAPE_TYPE = 3;
    
    // property declarations
    private $id;
    protected $radius;

    // method declarations
    public function __construct( $radius ) {      
      parent::__construct();
      $this->radius = $radius;
      $this->id = uniqid();
    }
    
    public function area() {
      return M_PI * $this->radius * $this->radius;
    }
          
  } // end class

?>

