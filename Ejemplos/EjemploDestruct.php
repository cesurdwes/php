<?php
	class Fruta{
		public $name;
		public $color;

		function __construct($name,$color){
			$this->name=$name;
			$this->color=$color;
		}

		function __destruct(){
			echo "La fruta es $this->name y el color es $this->color<br>";
		}

		function getColor(){
			return $this->color;
		}

	}

	$apple=new Fruta("manzana","rojo");

	echo $apple->getColor()."<br>";

	$banana=new Fruta("banana","amarillo");
	echo $banana->getColor()."<br>";


?>