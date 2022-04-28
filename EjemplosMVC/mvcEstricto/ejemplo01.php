<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo MVC Estricto</title>
  </head>
  <body>
    <?php
    include "dbUsuarios.php";
    $usuarios = new dbUsuarios();

    $tabla=$usuarios->devolverUsuarios();
    foreach ($tabla as  $fila) {
      echo "Nombre: ".$fila["nombre"];
      echo "</br>";
    }
     ?>

  </body>
</html>
