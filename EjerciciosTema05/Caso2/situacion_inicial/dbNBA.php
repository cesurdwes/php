<?php

class BBDD{

    //atributos
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db_name="nba";
    private $port=3307;

    //Conector
    private $conexion;

    //Propiedades para controlar errores
    private $error=false;

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

    //Función para devolver los partidos por equipo. Se contempla sólo como equipo local
    public function devolverPartidosPorEquipo($equipo){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, temporada
          FROM partidos
            WHERE equipo_local='".$equipo."'
              ORDER BY temporada ASC");
        return $resultado;
      }
      else{
        return null;
      }
    }
}
?>
