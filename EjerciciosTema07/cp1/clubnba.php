<?php

  include "db.php";

  class clubnba extends db {

    function __construct() {
      parent::__construct();
    }

    //Funciones de CRUD
    //Select
    public function getEquipo($nombre){
      $sql = "SELECT * FROM equipos WHERE Nombre='".$nombre."';";
      $resultado = $this->realizarQuery($sql);
      if($resultado!=null){
        $equipo=$resultado->fetch_assoc();
        $json_equipo = json_encode($equipo);
        return $json_equipo;
      }
      else{
        return null;
      }
    }

    //Insert
    public function insertEquipo($jsonEquipo){
      $arrayDatos = json_decode($jsonEquipo,true);
      $sql = "INSERT INTO equipos VALUES ('".$arrayDatos['Nombre']."','".$arrayDatos['Ciudad']."','".$arrayDatos['Conferencia']."','".$arrayDatos['Division']."');";

      $resultado = $this->realizarQuery($sql);
      return $resultado;
    }

    //Update
    public function updateEquipo($jsonEquipo){
      $arrayDatos = json_decode($jsonEquipo,true);
      $sql = "UPDATE equipos SET Ciudad='".$arrayDatos['Ciudad']."',
          Conferencia='".$arrayDatos['Conferencia']."',
            Division='".$arrayDatos['Division']."' WHERE Nombre='".$arrayDatos['Nombre']."';";

      $resultado = $this->realizarQuery($sql);
      return $resultado;
    }
  }
?>
