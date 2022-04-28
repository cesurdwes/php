<?php
	$mysqli = new mysqli("localhost","root","root","alumnos",3306);
	if ($mysqli->connect_errno){
		echo "Fallo al conectar con la base de datos: (".$mysqli->connect_errno.")".$mysqli->connect_error;
	} else {
		echo "<h3> Conexión realizada</h3>";
	}
	echo $mysqli->host_info."<br>";

	$resultado=$mysqli->query("select * from alumnos");
	$num_filas=$resultado->num_rows;
	for ($i=0; $i<$num_filas; $i++){
		$fila=$resultado->fetch_assoc();
		//var_dump($fila);
		//echo "<br>";
		echo "Alumno id=".$fila['id']." Nombre:".$fila['nombre']." Apellidos:".$fila['apellidos']." Edad:".$fila['edad']."<br>";
	}

?>