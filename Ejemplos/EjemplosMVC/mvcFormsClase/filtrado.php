<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrado</title>
  </head>
  <body>
  <?php
  //Conexiones a la DB
  include "dbNBA.php";
  //comprobacion de $POST
  if(isset($_POST["conferencia"])&&(!empty($_POST["conferencia"]))){
    $nba=new dbNBA();
    $resultado=$nba->devolverEquiposConf($_POST["conferencia"]);
      while ($fila=$resultado->fetch_assoc()) {
        echo "Nombre equipo:".$fila["nombre"]."<br>";
      }
  }else{
  ?>
  <a href="index.php">NO ME HAS ENVIADO NADA CARA ANCHOA</a>
  <?php
  }
  ?>
  </body>
</html>
