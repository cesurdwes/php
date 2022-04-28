<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recogida de informacion</title>
  </head>
  <body>
    La informacion recibida es:
    <br>
    <?php
      print_r($_POST);
     ?>
     <br>
     <?php
      echo "El nombre recibido es: ".$_POST["nombre"];
      ?>
  </body>
</html>
