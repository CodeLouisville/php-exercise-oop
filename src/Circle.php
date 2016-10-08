<?php
class Circle extends Shape {
	const SHAPE_TYPE = 3;	
	protected $radius;
	
	function __construct($circle_radius){
		parent::__construct($length = null, $width = null);
		$this->radius = $circle_radius;
	}
	
	function area (){
		$circle_area = pi() * $this->radius * $this->radius;
		return $circle_area;
	}
	
	public function getFullDescription (){
		$string = "";
		$string .= get_class($this)."<#";
		$string .= $this->getId(). ">: ";
		$string .= $this->getName(). " - ";
		$string .= $this->radius;

		return $string;
	}
}
?>