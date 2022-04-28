<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insercion usuario</title>
  </head>
  <body>
    <?php
    include "dbUsuarios.php";

    $usuarios=new dbUsuarios();
    $usuarios->insertarUsuario($_POST["nombre"],$_POST["apellidos"],$_POST["edad"]);
    //Presentar por pantalla el ultimo registro
    $resultado=$usuarios->devolverUltimoUsuario();
    $fila=$resultado->fetch_assoc();
    echo "id: ".$fila["id"]."</br>";
    echo "nombre: ".$fila["nombre"]."</br>";
    echo "apellidos: ".$fila["apellidos"]."</br>";
    echo "edad: ".$fila["edad"]."</br>";
    echo "<a href='updateForm.php?id=".$fila["id"]."&nombre=".$fila["nombre"]."&apellidos=".$fila["apellidos"]."&edad=".$fila["edad"]."'>Actualizar</a>";
    ?>
  </body>
</html>
