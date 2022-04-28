<html>
	<head></head>
	<body>
		<h1>Tablas de seno y coseno</h1>
		<table>
			<?php
				for ($numero=-1;$numero<=1;$numero=$numero+0.1){
					echo '<tr>';
					echo '<td>sen('.$numero.') </td>';
					if (sin($numero)<0){
						echo '<td style="color:red">';
					}	else {
						echo '<td style="color:blue">';
					}
					echo sin($numero).'</td>';
					echo '<td>cos('.$numero.') </td>';
					if (cos($numero)<0){
						echo '<td style="color:red">';
					}	else {
						echo '<td style="color:blue">';
					}
					echo cos($numero).'</td>';
				}
					echo '</tr>';
			?>
		</table>
	</body>
</html>
