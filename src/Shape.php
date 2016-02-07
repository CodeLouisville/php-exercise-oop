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
      return "Type: " . self::SHAPE_TYPE;
    }
    
    public function getFullDescription() {
      return "Shape<#" . $this->id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;
    }
    
      
  } // end class

?>
