<html>
<head>
	<meta charset="UTF-8">
  	<title>Resultado formulario1</title>
</head>
<body>
  <h1>Mostramos los datos recogidos a traves del formulario1</h1>

  <?php
    echo "La direccion es calle ".$_POST["calle"]." numero ".$_POST["numero"].
    ", ".$_POST["poblacion"].", ".$_POST["pais"];
  ?>
</body>
</html>
