<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos por conferencia</title>
  </head>
  <body>
    <!-- Esqueleto de info-->
    <?php
      include "dbNBA.php";
      //Crear el objeto de conexion
      $nba=new dbNBA();
      //Comprobar que llega la variable conferencia
      if(isset($_POST["conferencia"])){
        //Recuoperar los equipos y sus conferencias
        $resultado=$nba->devolverEquiposConf($_POST["conferencia"]);
    ?>
        <table>
          <tr>
            <th>Nombre</th>
            <th>Conferencia</th>
          </tr>
        <?php
            while ($fila = $resultado->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$fila["nombre"]."</td>";
              echo "<td>".$fila["conferencia"]."</td>";
              echo "</tr>";
            }
        ?>
        </table>
      <?php }?>
    <!-- Esqueleto de info-->
  </body>
</html>
