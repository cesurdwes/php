<?php

  include "db.php";

  class clubbasket extends db {

    function __construct() {
      parent::__construct();
    }

    //Funciones de CRUD
    //En este caso sólo gestionamos el update
    public function updateJugador($jsonJugador){
      $arrayDatos = json_decode($jsonJugador,true);
      $sql = "UPDATE jugadores set nombreJugador='".$arrayDatos['nombreJugador']."',
        posicion='".$arrayDatos['posicion']."',
          numero=".$arrayDatos['numero'].",
            edad=".$arrayDatos['edad']." WHERE id=".$arrayDatos['id'].";";

      $resultado = $this->realizarQuery($sql);
      return $resultado;
    }
  }
?>
