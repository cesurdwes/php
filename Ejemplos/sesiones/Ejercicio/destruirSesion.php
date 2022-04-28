<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Destruir sesión</title>
</head>
<body>
	<?php
	session_start();
	$_SESSION=[];
	print_r($_SESSION);
	session_destroy();
	?>
	<h2>Sesión destruida</h2>
	<br>
	<a href="numVisitas.php">Volver</a>
</body>
</html>