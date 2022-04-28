<?php
class Seguridad{
	private $usuario;
	function __construct() { 
		//Arrancamos la sesion 
		session_start(); 
		if(isset($_SESSION["usuario"])) 
			$this->usuario=$_SESSION["usuario"]; 
	}
}

	$seguridad = new Seguridad();

	$str = 'apple'; 
	if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') { 
		echo "Quiere una manzana roja o verde?"; 
	}

	$str = 'apple'; 
	if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') { 
		echo "Quiere una manzana roja o verde?"; 
	}
?>