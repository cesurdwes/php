<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando mamiferos</title>
  </head>
  <body>
    <?php
    include "mamifero.php";
    include "leon.php";
    include "perro.php";

    $m=new Mamifero();
    $m->setPatas(4);
    echo "El mamifero tiene ".$m->getPatas()." patas<br>";

    echo "<hr>";
    $l=new Leon();
    $l->setPatas(4);
    echo "El leon tiene ".$l->getPatas()." patas<br>";
    $l->setContinente("Africa");
    echo "El leon es de ".$l->getContinente();
    ?>
  </body>
</html>
