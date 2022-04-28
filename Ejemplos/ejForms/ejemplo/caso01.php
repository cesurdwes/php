<?php
/*La función substr nos devuelve la parte indicada
del String introducido en el formulario.
A este nuevo String, le aplicamos la función
hexdec que nos devuelve un número equivalente
en decimal.*/
  $R=hexdec(substr($_POST["hex"], 1, 2));

  $G=hexdec(substr($_POST["hex"], 3, 2));

  $B=hexdec(substr($_POST["hex"], -2));

  echo "RGB(" . $R . ", " . $G . ", " . $B . ")";

?>
