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
    <h1>CONSULTA DE CATEGORÍAS DE PELÍCULAS</h1>
    <br>
      <?php
        $mysqli = new mysqli("localhost","root","","sakila",3307);
        if($mysqli->connect_errno){
          echo "Fallo al conectar con la base de datos: (".$mysqli->conmect_errno
          . ")" . $mysqli->conect_error;
        }else{
          //Realizamos consulta para obtener los actores:
          $resultado = $mysqli->query("SELECT category_id, name FROM category;");
          echo "<fieldset><br><form action='pelisporcategoria.php' method='post'>";
          echo "<center><label for='categoria'>CATEGORÍA:</label>";
          echo "<select name='categoria'>";
          for($i=0;$i<$resultado->num_rows;$i++){
            $fila = $resultado->fetch_assoc();
            echo "<option value=".$fila['category_id'].">".$fila['name']."</option>";
          }
          echo "</select><br><br>";
          
        }
?>
      <input type='submit' value='Consultar'>
      </center>
      </form>
    </fieldset>;
  </body>
</html>
