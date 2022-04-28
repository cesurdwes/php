<?php

include "clubnba.php";

//distinguimos el tipo de peticion

$requestMode=$_SERVER['REQUEST_METHOD'];

if($requestMode=="GET"){
  if(isset($_GET['Nombre']) && !is_null($_GET['Nombre'])){

     $clubnba = new clubnba();

     $resultado = $clubnba->getEquipo($_GET['Nombre']);
     $equipo = json_decode($resultado,true);
     echo "<h1>Datos del equipo</h1>";
     echo "<h2>Nombre: ".$equipo["Nombre"]."</h2>";
     echo "<h2>Ciudad: ".$equipo['Ciudad']."</h2>";
     echo "<h2>Conferencia: ".$equipo['Conferencia']."</h2>";
     echo "<h2>División: ".$equipo['Division']."</h2>";
  }
  else{
   echo json_encode(["resultado"=>"Fallo:No se ha especificado el nombre del equipo"]);
  }
 }

 /*Importante destacar que al hacer post, en el apartado de Param eston no se envían. He tenido que añadirlos en Body directamente como parámetros
 https://stackoverflow.com/questions/24168759/sending-post-parameters-with-postman-doesnt-work-but-sending-get-parameters-do?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa*/

 elseif($requestMode=="POST"){
   //Obtenemos los parámetros desde Postman
   if(isset($_POST['Nombre']) && !is_null($_POST['Nombre'])
        && isset($_POST['Ciudad']) && !is_null($_POST['Ciudad'])
          && isset($_POST['Conferencia']) && !is_null($_POST['Conferencia'])
            && isset($_POST['Division']) && !is_null($_POST['Division'])){

              $clubnba = new clubnba();

              $array = array('Nombre'=>$_POST['Nombre'],'Ciudad'=>$_POST['Ciudad'],'Conferencia'=>$_POST['Conferencia'],'Division'=>$_POST['Division']);
              $datos = json_encode($array);

              $clubnba->insertEquipo($datos);
              echo "<h1>Se ha insertado el equipo ".$_POST['Nombre']."</h1>";

              //Tras actualizar mostramos la información
              $resultado = $clubnba->getEquipo($_POST['Nombre']);
              $equipo = json_decode($resultado,true);
              echo "<h1>Datos del equipo</h1>";
              echo "<h2>Nombre: ".$equipo['Nombre']."</h2>";
              echo "<h2>Ciudad: ".$equipo['Ciudad']."</h2>";
              echo "<h2>Conferencia: ".$equipo['Conferencia']."</h2>";
              echo "<h2>División: ".$equipo['Division']."</h2>";
   }
   else{
    echo json_encode(["resultado"=>"Fallo:No se han especificado los parámetros"]);
   }
}

elseif($requestMode=="PUT"){
   //Obtenemos los parámetros desde Postman
   if(isset($_GET['Nombre']) && !is_null($_GET['Nombre'])
        && isset($_GET['Ciudad']) && !is_null($_GET['Ciudad'])
          && isset($_GET['Conferencia']) && !is_null($_GET['Conferencia'])
            && isset($_GET['Division']) && !is_null($_GET['Division'])){

              $clubnba = new clubnba();

              $array = array('Nombre'=>$_GET['Nombre'],'Ciudad'=>$_GET['Ciudad'],'Conferencia'=>$_GET['Conferencia'],'Division'=>$_GET['Division']);
              $datos = json_encode($array);

              $clubnba->updateEquipo($datos);
              echo "<h1>Se ha actualizado el equipo ".$_GET['Nombre']."</h1>";

              //Tras actualizar mostramos la información
              $resultado = $clubnba->getEquipo($_GET['Nombre']);
              $equipo = json_decode($resultado,true);
              echo "<h1>Datos del equipo</h1>";
              echo "<h2>Nombre: ".$equipo['Nombre']."</h2>";
              echo "<h2>Ciudad: ".$equipo['Ciudad']."</h2>";
              echo "<h2>Conferencia: ".$equipo['Conferencia']."</h2>";
              echo "<h2>División: ".$equipo['Division']."</h2>";
   }
   else{
    echo json_encode(["resultado"=>"Fallo:No se han especificado los parámetros"]);
   }
}

elseif($requestMode=="DELETE"){
   //TODO
 }

 else{
   echo json_encode(["resultado"=>"Fallo"]);
 }

?>
