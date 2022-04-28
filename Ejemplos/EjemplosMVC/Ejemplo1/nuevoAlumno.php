<?php
    include "lib/alumno.php";
    //Crear el objeto de conexion
    $alumno=new Alumno();
      
    if((isset($_POST["nombre"])&&(!empty($_POST["nombre"])))&&
      	(isset($_POST["apellidos"])&&(!empty($_POST["apellidos"])))){
      	if (isset($_POST["edad"])&&(!empty($_POST["edad"]))){
        	$alumno->insertarAlumno($_POST["nombre"],$_POST["apellidos"],$_POST["edad"]);
		} else {
			$alumno->insertarAlumno($_POST["nombre"],$_POST["apellidos"]);
		}
	}
?>