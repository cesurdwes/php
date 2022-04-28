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
  //function insercion contra la tabla usuarios
  public function devolverUsuarios($orderByEdad=false,$orderColumn="edad"){
    if($this->error==false){
      $tabla=[];

      if($orderByEdad==true) $resultado = $this->conexion->query("SELECT * FROM usuario ORDER BY edad");
      else $resultado = $this->conexion->query("SELECT * FROM usuario");

      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }



  //function insercion contra la tabla usuarios
  public function devolverUltimoUsuario(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario ORDER BY id DESC LIMIT 1");
      return $resultado;
    }else{
      return null;
    }
  }
  //function insercion contra la tabla usuarios
  public function devolverUsuarioId($id){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
      return $resultado;
    }else{
      return null;
    }
  }






}


 ?>
