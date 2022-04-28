<html>
<body>
  <table border="1">
  <?php
    $filas=6;
    $columnas=6;
    $suma=0;
    $numfilamax=0;
    $maximo=0;
    for($i=0; $i<$filas; $i++){
      echo '<tr>';
      echo '<td>Fila '.$i.'</td>';
      for($j=0; $j<$columnas; $j++){
        echo '<td>';
          $matriz[$i][$j]=rand(1,6);
          $suma+=$matriz[$i][$j];
          echo $matriz[$i][$j];
          echo '</td>';
      }
      if ($suma>$maximo){
        $maximo=$suma;
        $numfilamax=$i;
      }
      $suma=0;
      echo '</tr>';
    }
  ?>
</table>
<?php echo '<br><h2>La fila con la suma mayor es la fila '.$numfilamax." = ".$maximo.'</h2>'; ?>
</body>
</html>
