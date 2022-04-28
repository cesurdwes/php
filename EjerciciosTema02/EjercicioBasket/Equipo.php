<?php
	class Equipo{
		private $nombre;
		private $posicion;

		function __construct(){
			$this->nombre="Equipo sin nombre";
			$this->posicion=0;
		}

		function mostrarEquipo(){
			echo 'Equipo: '.$this->nombre.'<br>';
		}

		function ponerEquipo($nombreNuevo){
			$this->nombre=$nombreNuevo;
		}

		function getPosicion(){
			return $this->posicion;
		}

		function setPosicion($pos){
			$this->posicion=$pos;
		}
	}
?>