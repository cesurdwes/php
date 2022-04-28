<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio</title>
  </head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION['numVisitas'])) {
        $_SESSION['numVisitas']=0;
        print_r($_SESSION);
      } else {
        $_SESSION['numVisitas']++;
        print_r($_SESSION);
      }
     ?>
     <br>
     <a href="destruirSesion.php">Destruir sesión</a>
  </body>
</html>
