<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de alumnos</title>
  </head>
  <body>
    <!-- Esqueleto de info-->
    <?php
      include "lib/alumno.php";
      //Crear el objeto de conexion
      $alumno=new Alumno();
      //Recuperar los alumnos
      $resultado=$alumno->devolverAlumnos();
    ?>
        <table>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
          </tr>
        <?php
            foreach ($resultado as $fila) {
              echo "<tr>";
              echo "<td>".$fila["nombre"]."</td>";
              echo "<td>".$fila["apellidos"]."</td>";
              echo "<td>".$fila["edad"]."</td>";
              echo "</tr>";
            }
        ?>
        </table>
    <!-- Esqueleto de info-->
  </body>
</html>
