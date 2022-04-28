<?php
	class Constantes{
		const MENSAJE="Bienvenidos a Cesur";
		const PI=3.141592;
		const HORA_ENTRADA="08:30";
	}



	echo Constantes::PI."<br>";
	echo Constantes::MENSAJE."<br>";
	echo Constantes::HORA_ENTRADA."<br>";

	class Prueba{
		private $hora=Constantes::HORA_ENTRADA;
		
	}
?>