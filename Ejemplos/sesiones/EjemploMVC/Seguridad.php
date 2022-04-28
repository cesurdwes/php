<?php
	class Seguridad{
		private $usuario;

		function _construct(){
			session_start();
			if (isset($_SESSION["usuario"]))
				$this->usuario=$_SESSION["usuario"];
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function addUsuario($usuario,$pass,$remember=false){
			$_SESSION["usuario"]=$usuario;
			$this->usuario=$usuario;
			if($remember){
				setcookie("usuario",$usuario, time()+(60*60));
				setcookie("pass",$pass, time()+(60*60));
			}
		}

		public function logOut(){
			$_SESSION=[];
			session_destroy();
		}
	}
?>