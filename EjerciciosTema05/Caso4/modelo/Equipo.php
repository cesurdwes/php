<?php

	include 'db.php';
	include 'EquipoNBA.php';

	class Equipo extends BBDD{

		function __construct(){
			parent::__construct();
		}

	    //Función para devolver los partidos por equipo. Ampliación 1
	    public function devolverPartidosPorEquipo($equipo_local,$equipo_visitante,$temporada){
	    	$sql="SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, temporada
	            FROM partidos WHERE equipo_local='".$equipo_local."' AND equipo_visitante ='"
	            .$equipo_visitante."' AND temporada ='".$temporada."' ORDER BY temporada ASC";
	        $resultado = $this->realizarConsulta($sql);
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
	

		//Funcion para devolver los equipos
	    public function devolverEquipos(){
	    	$sql="SELECT Nombre FROM equipos ORDER BY Nombre ASC";
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

	    //Funcion para devolver los equipos
	    public function devolverTemporadas(){
	      $sql="SELECT Distinct temporada FROM partidos ORDER BY temporada ASC";
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


	    public function insertarEquipo($nombre,$ciudad,$conferencia,$division){
	        $nuevo_equipo = new EquipoNBA();
	        //Completamos los datos del equipo
	        $nuevo_equipo->setNombre($nombre);
	        $nuevo_equipo->setCiudad($ciudad);
	        $nuevo_equipo->setConferencia($conferencia);
	        $nuevo_equipo->setDivision($division);
	        //creamos la consulta
	        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division)
	        VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
	        $ok=$this->realizarConsulta($sql);
	        if ($ok==1) {
	          return $nuevo_equipo;
	        } else {
	          return null;
	        }
	    }

	    public function modificarEquipo($nombre,$ciudad,$conferencia,$division){
	        $equipo_modificado = new EquipoNBA();
	        //Completamos los datos del equipo
	        $equipo_modificado->setNombre($nombre);
	        $equipo_modificado->setCiudad($ciudad);
	        $equipo_modificado->setConferencia($conferencia);
	        $equipo_modificado->setDivision($division);
	        //creamos la consulta
	        $sql = "UPDATE equipos SET Ciudad = '".$ciudad."',Conferencia = '".$conferencia."', Division = '".$division."' WHERE Nombre = '".$nombre."'";
			$ok=$this->realizarConsulta($sql);
	        if ($ok==1) {
	          return $equipo_modificado;
	        } else {
	          return null;
	        }
	    }

	    public function borrar_equipo($nombre){
	      	$borrado = false;
	      	$sql = "DELETE FROM equipos WHERE Nombre = '".$nombre."'";
	        $ok=$this->realizarConsulta($sql);
	        if ($ok==1){
	            $borrado = true;
	        }
	        return $borrado;
	    }

	    public function listado_equipos(){
	    	$sql = "SELECT * FROM equipos ORDER BY Nombre ASC";
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

	    public function getEquipo(){
	      return $this->nuevo_equipo;
	    }

	    public function setEquipo($equipo){
	      $this->nuevo_equipo = $equipo;
	    }
	}

?>