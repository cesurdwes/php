<?php
  $a=10;
  $b=20;
  $c=5;
  $mayor=$a;
  $nombre='$a';
  if ($b>$mayor){
    $mayor=$b;
    $nombre='$b';
  }
  if ($c>$mayor){
    $mayor=$c;
    $nombre='$c';
  }
  echo 'La variable '.$nombre." tiene el valor mayor:".$mayor;
 ?>
