<?php
	$filas=5;
	$columnas=6;
	$ceros=0;
	$positivos=0;
	$negativos=0;
	for($i=0;$i<$filas;$i++){
		for($j=0;$j<$columnas;$j++){
			$valor=rand(-5,5);
			if ($valor>0)
				$positivos++;
			else if ($valor<0)
				$negativos++;
			else
				$ceros++;
			$matriz[$i][$j]=$valor;
		}
	}
?>
<html>
<body>
	<h2>Matriz de 5x6</h2>
	<table border="1">
		<?php
			for($i=0;$i<$filas;$i++){
				echo '<tr>';
				for($j=0;$j<$columnas;$j++){
					echo '<td style="align:center">'.$matriz[$i][$j].'</td>';
				}
				echo '</tr>';
			}
		?>
	</table>
	<p>En total hay:<br>
	<ul>
		<?php
			echo '<li>'.$positivos.' números positivos</li>';
			echo '<li>'.$negativos.' números negativos</li>';
			echo '<li>'.$ceros.' ceros</li>';
		?>
	</ul>

</body>
</html>