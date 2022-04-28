<?php

//Incluimos la clase Equipo
include('Equipo.php');

class BBDD {

    //Objeto equipo
    private $nuevo_equipo;

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

    public function insertarEquipo($nombre,$ciudad,$conferencia,$division){
      if($this->error==false){
        //creamos la consulta
        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division)
        VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";

        if ($this->conexion->query($sql) === TRUE) {
          $nuevo_equipo = new Equipo();
          //Completamos los datos del equipo
          $nuevo_equipo->setNombre($nombre);
          $nuevo_equipo->setCiudad($ciudad);
          $nuevo_equipo->setConferencia($conferencia);
          $nuevo_equipo->setDivision($division);
          return $nuevo_equipo;
        }
        else {
          return null;
        }
      }
      else{
        return null;
      }
    }

    public function modificarEquipo($nombre,$ciudad,$conferencia,$division){
      if($this->error==false){

        $equipo_modificado = new Equipo();

        //Completamos los datos del equipo
        $equipo_modificado->setNombre($nombre);
        $equipo_modificado->setCiudad($ciudad);
        $equipo_modificado->setConferencia($conferencia);
        $equipo_modificado->setDivision($division);

        //creamos la consulta
        $sql = "UPDATE equipos SET Ciudad = '".$ciudad."',Conferencia = '".$conferencia."', Division = '".$division."' WHERE Nombre = '".$nombre."'";

        if ($this->conexion->query($sql) === TRUE) {
          return $equipo_modificado;
        }
        else {
          return null;
        }
      }
      else{
        return null;
      }
    }

    public function borrar_equipo($nombre){
      $borrado = false;

      if($this->error==false){
        $sql = "DELETE FROM equipos WHERE Nombre = '".$nombre."'";
        if($this->conexion->query($sql)){
            $borrado = true;
        }
        return $borrado;
      }
      else{
        return $borrado;
      }
    }

    public function listado_equipos(){
      if($this->error==false){
        $sql = "SELECT * FROM equipos ORDER BY Nombre ASC";
        return $this->conexion->query($sql);
      }
      else{
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
