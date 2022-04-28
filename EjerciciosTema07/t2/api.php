<?php

include "clubbasket.php";

//distinguimos el tipo de peticion

$requestMode=$_SERVER['REQUEST_METHOD'];

if($requestMode=="GET"){
   //TODO
 }

 elseif($requestMode=="POST"){
    //TODO
}

elseif($requestMode=="PUT"){
   //Para este ejercicio creamos un json con datos de un array asociativo para hacer la actualización
   //Se ha modificado para obtener los parámetros desde Postman
   if(isset($_GET['id']) && !is_null($_GET['id'])
      && isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])
        && isset($_GET['posicion']) && !is_null($_GET['posicion'])
          && isset($_GET['numero']) && !is_null($_GET['numero'])
            && isset($_GET['edad']) && !is_null($_GET['edad'])){
              $clubbasket = new clubbasket();

              $array = array('id'=>$_GET['id'],'nombreJugador'=>$_GET['nombreJugador'],'posicion'=>$_GET['posicion'],'numero'=>$_GET['numero'],'edad'=>$_GET['edad']);
              $datos = json_encode($array);

              $clubbasket->updateJugador($datos);
              echo "<h1>Se ha actualizado el jugador con id".$_GET['id']."</h1>";
   }
   else{
    echo "<h1>No se han especificado los parámetros</h1>";
   }
}

elseif($requestMode=="DELETE"){
  //Obtenemos el nombre
  if(isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])){

     $clubbasket = new clubbasket();
     $array = array('nombreJugador'=>$_GET['nombreJugador']);

     //Codificamos el envío de datos y realizamos la query
     $datos = json_encode($array);
     $resultado = $clubbasket->borrarJugador($datos);

     if($resultado != null){
       echo "<h1>Se ha borrado el jugador ".$_GET['nombreJugador']."</h1>";
     }
     else{
       echo "<h1>Ha habido un error al borrar el jugador</h1>";
     }
  }
  else{
    echo "<h1>No se han especificado los parámetros</h1>";
  }
 }

 else{
   echo json_encode(["resultado"=>"Fallo"]);
 }

?>
