<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destruir sesion</title>
  </head>
  <body>
    <?php
      session_start();
      /*$_SESSION=[];*/
      print_r($_SESSION);
      session_destroy();
      print_r($_SESSION);
    ?>
  </body>
</html>
