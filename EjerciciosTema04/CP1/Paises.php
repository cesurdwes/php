<!DOCTYPE html>
<html>
<head>
	<title>Conexión a base de datos</title>
	<style>
      table{
        border-collapse: collapse;
      }
      th, td{
        border: 1px solid #000;
        padding: 5px;
      }
      th{
        background-color: #f0d69e;
      }
      th:first-child{
        background-color: #fff;
        border-top: none;
        border-left: none;
      }
    </style>
</head>
<body>
	<?php
		$mysqli = new mysqli("localhost","root","","paises",3307);
			if ($mysqli->connect_errno){
				//Error
				echo 'Fallo al conectar a la base de datos ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
			} 
			/*else {
				echo '<h3>Conexión realizada!!</h3><br><hr>';
			}
			echo $mysqli->host_info."<br><br>";*/
	?>
	<table>
		<tr style="background: #CCC">
			<th></th>
			<th>Nombre Pais</th>
			<th>Continente</th>
		</tr>
		<?php
			$resultado = $mysqli->query("select * from pais");
			for ($i=0;$i<$resultado->num_rows;$i++){
				$fila = $resultado->fetch_assoc();
				echo '<tr><td>'.$fila['id'].'</td>';
				echo '<td>'.$fila['nombre'].'</td>';
				echo '<td>'.$fila['continente'].'</td></tr>';	
			}
			?>
	</table>
</body>
</html>