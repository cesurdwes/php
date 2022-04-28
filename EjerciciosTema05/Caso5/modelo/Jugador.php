<?php

	include 'db.php';
	include 'JugadorNBA.php';

	class Jugador extends BBDD{

		function __construct(){
			parent::__construct();
		}

		//Funcion para devolver los jugadores
	    public function devolverJugadores(){
	    	$sql="SELECT * FROM jugadores ORDER BY Nombre ASC";
	    	$resultado=$this->realizarConsulta($sql);
	    	if ($resultado!=null){
	    		 $array=[];
			        while ($fila=$resultado->fetch_assoc()){
			        	$array[]=$fila;
			        }
		        	return $array;
		      	}else{
		        	return null;
		      	}
	    }

	    public function insertarJugador($nombre,$procedencia,$altura,$peso,$posicion,$equipo){
	        $nuevo_jugador = new JugadorNBA();
	        //Completamos los datos del equipo
	        $nuevo_jugador->setNombreJugador($nombre);
	        $nuevo_jugador->setProcedencia($procedencia);
	        $nuevo_jugador->setAltura($altura);
	        $nuevo_jugador->setPeso($peso);
	        $nuevo_jugador->setPosicion($posicion);
	        $nuevo_jugador->setEquipo($equipo);	        
	        //creamos la consulta para asigarle un código al jugador
	        $sql="SELECT MAX(codigo) as total FROM jugadores;";
			$resultado=$this->realizarConsulta($sql);
			$array=$resultado->fetch_assoc();
			$codigo=$array['total']+1;
			$nuevo_jugador->setCodigo($codigo);
			//creamos la consulta
	        $sql = "INSERT INTO jugadores VALUES (".$codigo.",'".$nombre."','".$procedencia."','".$altura."',".$peso.",'".$posicion."','".$equipo."');";
	        $ok=$this->realizarConsulta($sql);
	        if ($ok==1) {
	          return $nuevo_jugador;
	        } else {
	          return null;
	        }
	    }

	    public function modificarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$equipo){
	        $nuevo_jugador = new JugadorNBA();
	        //Completamos los datos del equipo
	        $nuevo_jugador->setCodigo($codigo);
	        $nuevo_jugador->setNombreJugador($nombre);
	        $nuevo_jugador->setProcedencia($procedencia);
	        $nuevo_jugador->setAltura($altura);
	        $nuevo_jugador->setPeso($peso);
	        $nuevo_jugador->setPosicion($posicion);
	        $nuevo_jugador->setEquipo($equipo);	
	        //creamos la consulta
	        $sql = "UPDATE jugadores SET Nombre = '".$nombre."',Procedencia = '".$procedencia."', Altura = '".$altura."', Peso=".$peso.", Posicion='".$posicion."', Nombre_equipo='".$equipo."' WHERE codigo = ".$codigo;
			$ok=$this->realizarConsulta($sql);
	        if ($ok==1) {
	          return $nuevo_jugador;
	        } else {
	          return null;
	        }
	    }

	    public function borrar_jugador($codigo){
	      	$borrado = false;
	      	$sql = "DELETE FROM jugadores WHERE codigo = ".$codigo;
	        $ok=$this->realizarConsulta($sql);
	        if ($ok==1){
	            $borrado = true;
	        }
	        return $borrado;
	    }

	    public function listado_jugadores(){
	    	$sql = "SELECT * FROM jugadores ORDER BY Nombre ASC";
	        $resultado=$this->realizarConsulta($sql);
			if ($resultado!=null){
	    		 $array=[];
			        while ($fila=$resultado->fetch_assoc()){
			        	$array[]=$fila;
			        }
		        	return $array;
		      	}else{
		        	return null;
		      	}
	    }
	}

?>