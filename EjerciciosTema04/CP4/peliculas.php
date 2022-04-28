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
      <span class="site-name">Caso práctico 4 Unidad 4</span>
      <span class="site-desc">Desarrollo web en entorno servidor</span>
      <span class="site-desc">2º DAW</span>
  		</a>
  		<nav>
  			<ul>
          <li><a href="sakila.php">Actores</a></li>
          <li><a href="categorias.php">Películas</a></li>
  			</ul>
  		</nav>
	  </header>

    <br>
    <h1>PELÍCULAS DE 
    	<?php 
			$actor_id=$_POST['actor'];
	    	$mysqli = new mysqli("localhost","root","","sakila",3307);
	        if($mysqli->connect_errno){
	          echo "Fallo al conectar con la base de datos: (".$mysqli->conmect_errno
	          . ")" . $mysqli->conect_error;
	        }else{
	          //Realizamos consulta para obtener el actor
	          $resultado = $mysqli->query("SELECT first_name, last_name FROM actor where actor_id=".$actor_id.";");
	          $actor=$resultado->fetch_assoc();
	          echo $actor['first_name']." ".$actor['last_name'];
    	?>
    </h1>
    <br>
    <table border="solid 1px black">
    <th width="250px">Título</th>
    <th width="400px">Descripción</th>
<?php
          //Realizamos consulta para obtener los id de las películas del actor
          $resultado = $mysqli->query("SELECT DISTINCT film_id FROM film_actor where actor_id=".$actor_id.";");
          for ($i=0;$i<$resultado->num_rows; $i++){
          	$fila = $resultado->fetch_assoc();
          	//Realizamos consulta para obtener cada película del actor
          	$pelicula = $mysqli->query("SELECT title,description FROM film WHERE film_id=".$fila['film_id'].";");
          	for ($j=0;$j<$pelicula->num_rows;$j++){
          		$peli=$pelicula->fetch_assoc();
          		echo "<tr>";
            	echo "<td>" .$peli['title']. "</td>";
            	echo "<td>" .$peli['description']. "</td>";
          	}
          }
        }
?>
		</table>
	</body>
</html>
