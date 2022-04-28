<?php

class BBDD{

    //atributos
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db_name="gameofthrones";
    private $port=3307;    

    //Conector
    private $conexion;

    //Propiedades para controlar errores
    private $error=false;
    private $error_msj="";

    //Constructor
    function __construct() {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);

      if ($this->conexion->connect_errno) {
        $this->error=true;
      }

      $this->conexion->query("SET NAMES 'UTF8'");
    }

    //Funcion para saber si hay error en la conexion
    function hayError(){
      return $this->error;
    }

    function msjError(){
      return $this->error_msj;
    }

    function realizarConsulta($consulta){
      if (!$this->hayError()){
        $resultado = $this->conexion->query($consulta);
        return $resultado;
      } else {
        $this->error_msj="Imposible realizar la consulta: ".$consulta;
        return null;
    }
  }
}
?>
