<?php
  //Como se especifica en este link de stackoverflow, hay que iniciar sesión antes de destruirla
  session_start();
  $_SESSION = [];
  session_destroy();
  header('Location:index.php');
 ?>
