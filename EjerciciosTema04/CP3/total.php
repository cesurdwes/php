<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    h1{
      text-align: center;
    }
  </style>
  <body>
    <header>
      <h1>Beneficios totales</h1>
    </header>
    <?php
/*Utilizamos un include para invocar a las
variables generales del archivo consultas.php*/
      include 'consultas.php';
      $total=$beneficio1+$beneficio2;
      echo "<h1>" . $total . "</h1>";
    ?>
  </body>
</html>
