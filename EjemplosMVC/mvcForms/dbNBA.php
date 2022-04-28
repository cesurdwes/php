<?php
/**
 * Permitir la conexion contra la base de datos
 */
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";
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
  
  //Funcion para devolver los equipos y su conferencia
  public function devolverEquiposConf($conferencia){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT nombre,conferencia FROM equipos WHERE conferencia='".$conferencia."'");
      //echo "SELECT nombre,conferencia FROM equipos WHERE conferencia='".$conferencia."'";
      return $resultado;
    }else{
      return null;
    }
  }
}
