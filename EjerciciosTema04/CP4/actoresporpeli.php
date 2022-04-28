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
    <h1>ACTORES DE 
    	<?php
			  $peli_id=$_POST['pelicula'];
	    	$mysqli = new mysqli("localhost","root","","sakila",3307);
	        if($mysqli->connect_errno){
	          echo "Fallo al conectar con la base de datos: (".$mysqli->conmect_errno
	          . ")" . $mysqli->conect_error;
	        }else{
	          //Busco los actor_id correspondientes a esta peli
	          $resultado = $mysqli->query("SELECT title FROM film where film_id=".$peli_id.";");
            $peli=$resultado->fetch_assoc();
            echo $peli['title'];
             }
    	?>
    </h1>
    <br>
    <table border="solid 1px black">
    <th width="200px">Nombre</th>
    <th width="200px">Apellidos</th>
<?php
          //Realizamos consulta para obtener los id de las películas del actor
            //Busco los actor_id correspondientes a esta peli
            $resultado = $mysqli->query("SELECT actor_id FROM film_actor where film_id=".$peli_id.";");
            for ($i=0;$i<$resultado->num_rows;$i++){
               $actor=$resultado->fetch_assoc();
               $datosactor=$mysqli->query("select first_name,last_name from actor where actor_id=".$actor['actor_id'].";");
               $elactor=$datosactor->fetch_assoc();
               echo "<tr><td>".$elactor['first_name']."</td><td> ".$elactor['last_name']."</td></tr>";
             }
        
?>
		</table>
	</body>
</html>
