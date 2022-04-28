<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Beneficios Semana 1</h1>
    </header>
    <?php
/*Utilizamos un include para invocar a las 
variables generales del archivo consultas.php*/
      include 'consultas.php';
      echo "<h1>" . $beneficio1 . "</h1>";
     ?>
  </body>
</html>
