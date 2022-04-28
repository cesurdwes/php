<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de alumnos</title>
  </head>
  <body>
    <?php
        include "lib/escuela.php";
        $escuela=new Escuela();
        $resultado=$escuela->devolverAlumnos();
      ?>
        <table>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
          </tr>
        <?php
            while ($fila = $resultado->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$fila["nombre"]."</td>";
              echo "<td>".$fila["apellidos"]."</td>";
              echo "<td>".$fila["edad"]."</td>";
              echo "</tr>";
            }
        ?>
        </table>
  </body>
  </html>