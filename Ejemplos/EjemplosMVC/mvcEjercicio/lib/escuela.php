<?php

class Escuela{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="escuela";
  private $port=3307;

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  function devolverAlumnos(){
  	if ($this->error==false){
  		$resultado=$this->conexion->query("SELECT * FROM ALUMNOS;");
  	 	return $resultado;
  	 } else return null;
  }

  function insertarAlumno($nombre,$apellidos,$edad){
  	if ($this->error==false){
  		$insercion="INSERT INTO alumnos(nombre, apellidos, edad) VALUES ('".$nombre."','".$apellidos."',".$edad.");";
  		$this->conexion->query($insercion);
  	}
  }
}

?>