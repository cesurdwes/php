<!DOCTYPE html>
<html>
<head>
	<title>Conexión a base de datos</title>
</head>
<body>
	<?php
		$mysqli = new mysqli("localhost","root","","club_basket",3307);
			if ($mysqli->connect_errno){
				//Error
				echo 'Fallo al conectar a la base de datos ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
			} else {
				echo '<h3>Conexión realizada!!</h3><br><hr>';
			}
			echo $mysqli->host_info."<br><br>";
	?>
	<table>
		<tr style="background: #CCC">
			<th>Id</th>
			<th>Nombre Jugador</th>
			<th>Posicion</th>
			<th>Numero</th>
			<th>Edad</th>
		</tr>
		<?php
			$resultado = $mysqli->query("select * from jugadores");
			for ($i=0;$i<$resultado->num_rows;$i++){
				$fila = $resultado->fetch_assoc();
				echo '<tr><td>'.$fila['id'].'</td>';
				echo '<td>'.$fila['nombreJugador'].'</td>';
				echo '<td>'.$fila['posicion'].'</td>';
				echo '<td>'.$fila['numero'].'</td>';	
				echo '<td>'.$fila['edad'].'</td></tr>';	
			}
			?>
	</table>
</body>
</html>