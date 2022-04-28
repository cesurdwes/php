<!DOCTYPE html>
<?php
	$cadena="Hola";
	$cadena2=" saludos";
	echo 'Hola $cadena<br>';
	echo "Saludos $cadena2<br>";
	echo "PHP!!<br>";
	echo 'El tipo de la variable $cadena es '.gettype($cadena);

	define ('PI',3.14);
	echo "<br>PI = ".PI."<br>";

	switch($cadena){
		case 'Hola':echo "HOLAAAAA"; break;
		default:echo "ADIOSSSS";
	}

	echo "<br>";

	$prueba=($cadena=="Hola"?"SE CUMPLE":"NOOOO");
	echo $prueba;
  
?>