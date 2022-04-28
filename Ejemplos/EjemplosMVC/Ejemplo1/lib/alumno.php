<?php
	include 'escuela.php';
	
	class Alumno extends Escuela{
		function __construct(){
			parent::__construct();
		}

		// R del CRUD
		public function devolverAlumnos(){
			$sql="SELECT nombre,apellidos,edad FROM alumnos";
		    $resultado = $this->realizarConsulta($sql);
		    if ($resultado!=null){
		    	$tabla=[];
				while($fila=$resultado->fetch_assoc()){
					$tabla[]=$fila;
				}
		      return $tabla;
		    } else {
		      return null;
		    }
  		}

  		//Funcion para insertar nuevos alumnos - C del CRUD
		public function insertarAlumno($nombre,$apellidos,$edad=18){
			$sql="INSERT INTO alumnos(nombre,apellidos,edad) 
		      		VALUES('".$nombre."','".$apellidos."',".$edad.");";
		    $resultado = $this->realizarConsulta($sql);
		}

  		//Funcion para modificar nuevos alumnos - U del CRUD
		public function actualizarAlumno($id,$nombre,$apellidos,$edad){
			$sql="UPDATE alumnos SET nombre='".$nombre."', apellidos='".
					$apellidos."', edad=".$edad." WHERE id=".$id.";";
		    $resultado = $this->realizarConsulta($sql);
		}

		//Funcion para eliminar alumnos - D del CRUD
		public function eliminarAlumno($id){
			$sql="DELETE FROM alumnos WHERE id=".$id.";";
		    $resultado = $this->realizarConsulta($sql);
		}

	}
?>