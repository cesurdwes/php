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

    //Función para devolver los partidos por equipo.
    //Modificamos la función para permitir diferentes parámetros
    public function devolverPartidosPorEquipo($equipo_local,$equipo_visitante,$temporada){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, temporada
            FROM partidos
              WHERE equipo_local='".$equipo_local."' AND equipo_visitante ='".$equipo_visitante."' AND temporada ='".$temporada."'
                ORDER BY temporada ASC");
        return $resultado;
      }else{
        return null;
      }
    }

    //Funcion para devolver los equipos
    public function devolverEquipos(){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT Nombre FROM equipos ORDER BY Nombre ASC");
        return $resultado;
      }else{
        return null;
      }
    }

    //Funcion para devolver los equipos
    public function devolverTemporadas(){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT Distinct temporada FROM partidos ORDER BY temporada ASC");
        return $resultado;
      }else{
        return null;
      }
    }
}
?>
