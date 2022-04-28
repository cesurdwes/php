<?php
/*Aplicamos la función dechex para convertir
los valores introducidos a hexadecimal y los
almacenamos en variables*/
  $hex1=dechex($_POST["r"]);
  $hex2=dechex($_POST["g"]);
  $hex3=dechex($_POST["b"]);
/*Utilizamos la función str_pad para rellenar con un
"0" a la izquierda, los valores en los que nos devuelva
un sólo número. Y con la función strtoupper convertimos
los Strings devueltos en mayúsculas, para mejorar la presentación.*/ 
  echo "El valor hexadecimal es: <strong>#";
  echo str_pad(strtoupper($hex1), 2, "0", STR_PAD_LEFT);
  echo str_pad(strtoupper($hex2), 2, "0", STR_PAD_LEFT);
  echo str_pad(strtoupper($hex3), 2, "0", STR_PAD_LEFT);

 ?>
