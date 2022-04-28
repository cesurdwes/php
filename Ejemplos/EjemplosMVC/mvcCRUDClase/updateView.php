<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update usuario</title>
  </head>
  <body>
    <?php
    include "dbUsuarios.php";

    $usuarios=new dbUsuarios();
    $usuarios->actualizarUsuario($_POST["id"],$_POST["nombre"],$_POST["apellidos"],$_POST["edad"]);
    //Presentar por pantalla el ultimo registro
    $resultado=$usuarios->devolverUltimoUsuario();
    $fila=$resultado->fetch_assoc();
    echo "id: ".$fila["id"]."</br>";
    echo "nombre: ".$fila["nombre"]."</br>";
    echo "apellidos: ".$fila["apellidos"]."</br>";
    echo "edad: ".$fila["edad"]."</br>";
  ?>
  </body>
</html>
