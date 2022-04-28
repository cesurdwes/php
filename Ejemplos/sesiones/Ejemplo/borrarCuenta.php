<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrado de informacion</title>
  </head>
  <body>
    <?php
    session_start();
    unset($_SESSION['count']);
    print_r($_SESSION);
    ?>
  </body>
</html>
