<?php
	$numero=3;
	$fila=0;
	$columna=0;
	define('FILAMAX',6);
	define('COLMAX',4);

	while (($fila<FILAMAX)&&($columna<COLMAX)){
		if ($numero%3==0){
			$matriz[$fila][$columna]=$numero;
			$columna++;			
			if ($columna>=COLMAX){
				$columna=0;
				$fila++;
			}
		}
		$numero++;
	}
?>
<html>
<body>
	<table border="1">
		<?php
			for($fila=0;$fila<6;$fila++){
				echo '<tr>';
				for($columna=0;$columna<4;$columna++){
					echo '<td>'.$matriz[$fila][$columna]."</td>";
				}
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>