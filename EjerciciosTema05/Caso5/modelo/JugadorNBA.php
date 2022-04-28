<?php

	class JugadorNBA{

		private $codigo;
		private $nombreJugador;
		private $procedencia;
		private $altura;
		private $peso;
		private $posicion;
		private $equipo;

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo=$codigo;
		}

		public function getNombreJugador(){
			return $this->nombreJugador;
		}

		public function setNombreJugador($nombreJugador){
			$this->nombreJugador=$nombreJugador;
		}

		public function getProcedencia(){
			return $this->procedencia;
		}

		public function setProcedencia($procedencia){
			$this->procedencia=$procedencia;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function setAltura($altura){
			$this->altura=$altura;
		}

		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($peso){
			$this->peso=$peso;
		}

		public function getPosicion(){
			return $this->posicion;
		}

		public function setPosicion($posicion){
			$this->posicion=$posicion;
		}

		public function getEquipo(){
			return $this->equipo;
		}

		public function setEquipo($equipo){
			$this->equipo=$equipo;
		}
	}
?>