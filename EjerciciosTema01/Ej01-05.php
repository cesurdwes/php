<html>
	<head></head>
	<body>
		<h1>Tablas de multiplicar</h1>
		<table>
			<?php
				for ($numero=1;$numero<=10;$numero++){
					echo '<h2>Tabla del '.$numero.'</h2>';
						for ($i=1;$i<=10;$i++){
							echo '<tr>';
							echo $numero." x ".$i." = ".$numero*$i.'<br>';
						}
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>