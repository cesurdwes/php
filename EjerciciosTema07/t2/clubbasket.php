<?php

  include "db.php";

  class clubbasket extends db {

    function __construct() {
      parent::__construct();
    }

    //Funciones de CRUD
    //Update
    public function updateJugador($jsonJugador){
      $arrayDatos = json_decode($jsonJugador,true);
      $sql = "UPDATE jugadores set nombre='".$arrayDatos['nombreJugador']."',
        posicion='".$arrayDatos['posicion']."',
          numero=".$arrayDatos['numero'].",
            edad=".$arrayDatos['edad']." WHERE id=".$arrayDatos['id'].";";

      $resultado = $this->realizarQuery($sql);
      return $resultado;
    }

    //Borramos un jugador por su nombre
    public function borrarJugador($jsonJugador){
      $arrayDatos = json_decode($jsonJugador,true);
      $sql = "DELETE FROM jugadores WHERE nombreJugador='".$arrayDatos['nombreJugador']."';";
      $resultado = $this->realizarQuery($sql);
      return $resultado;
    }
  }
?>
