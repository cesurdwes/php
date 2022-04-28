<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probar las sesiones</title>
  </head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION['count'])) {
        $_SESSION['count']=0;
        $_SESSION['usuario']="Paco";
        print_r($_SESSION);
      } else {
        $_SESSION['count']++;
        print_r($_SESSION);
      }
     ?>
     <br>
     <a href="borrarCuenta.php">Borrar la cuenta</a>
     <br>
     <a href="destruirSesion.php">Destruir sesion</a>
  </body>
</html>
