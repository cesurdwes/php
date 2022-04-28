<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACtualizar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "lib/escuela.php";
  $escuela=new Escuela();

  //insertar un alumno
  $escuela->insertarAlumno($_POST["nombre"],$_POST["apellidos"],$_POST["edad"]);

  ?>
  </body>
</html>
