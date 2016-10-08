<?php
class Shape {
	const SHAPE_TYPE = 1;
	public $name;
	protected $length;
	protected $width;
	private $id;
	
	function __construct($shape_length,$shape_width){
		$this->length = $shape_length;
		$this->width = $shape_width;
		$this->id = uniqid();		
	}
	
	function getName (){
		return $this->name;		
	}
	
	function setName($new_name){
		$this->name = $new_name;		
	}
	
	function getId() {
		return $this->id;		
	}
	function area (){
		$shape_area = $this->length * $this->width;
		return $shape_area;
	}
	
	static function getTypeDescription (){
		return ("Type: ".static::SHAPE_TYPE);
	}
	
	public function getFullDescription (){
		$string = "";
		$string .= get_class($this)."<#";
		$string .= $this->getId(). ">: ";
		$string .= $this->getName(). " - ";
		$string .= $this->length. " x ";
		$string .= $this->width;
		
		return $string;
	}
}


?>