<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css" type="text/css" media="all">
  </head>
  <body>
    <header id="main-header">
  		<a id="logo-header" href="#">
      <span class="site-name">Caso práctico 2 Unidad 4</span>
      <span class="site-desc">Desarrollo web en entorno servidor</span>
      <span class="site-desc">2º DAW</span>
  		</a>
  		<nav>
  			<ul>
          <li><a href="pivot.php">Pivot</a></li>
          <li><a href="ala-pivot.php">Ala-pivot</a></li>
          <li><a href="alero.php">Alero</a></li>
  			</ul>
  		</nav>
	  </header>

    <br>
    <h1>JUGADORES PIVOT</h1>
    <br>

    <table border="solid 1px black">
      <th width="200px">Jugador</th>
      <th width="200px">Equipo</th>
      <th width="200px">Procedencia</th>

      <?php
        $mysqli = new mysqli("localhost","root","","nba",3307);
        if($mysqli->connect_errno){
          echo "Fallo al conectar con la base de datos: (".$mysqli->conmect_errno
          . ")" . $mysqli->conect_error;
        }else{
          //Realizamos consulta para mostrar todos los jugadores:
          $resultado = $mysqli->query("SELECT Nombre, Procedencia, Nombre_equipo FROM jugadores WHERE posicion='C'");
          for($i=0;$i<$resultado->num_rows;$i++){
            $fila = $resultado->fetch_assoc();
            echo "<tr>";
            echo "<td>" .$fila['Nombre']. "</td>";
            echo "<td>" .$fila['Nombre_equipo']. "</td>";
            echo "<td>" .$fila['Procedencia']. "</td>";
          }
        }
      ?>
    </table>
  </body>
</html>
