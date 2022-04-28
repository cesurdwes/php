<?php
/**
 * Permitir la conexion contra la base de datos
 */
class dbUsuarios
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="usuarios";
  private $port="3307";

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
  //Funciones para la insercion
  function devolverUltimoUsuario(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario ORDER BY id DESC LIMIT 1");
      return $resultado;
    }else{
      return null;
    }
  }
  //Funciones para la insercion
  function insertarUsuario($nombre,$apellidos,$edad){
    $sqlInsercion="INSERT INTO usuario(id,nombre,apellidos,edad)
        VALUES (NULL, '".$nombre."', '".$apellidos."', ".$edad.")";
    $this->conexion->query($sqlInsercion);
  }

  //Funciones para la insercion
  function actualizarUsuario($id,$nombre,$apellidos,$edad){
    $sqlInsercion="UPDATE usuario
    SET nombre='".$nombre."',apellidos='".$apellidos."',edad=".$edad.
    " WHERE id=".$id;
    $this->conexion->query($sqlInsercion);
  }

}


 ?>
