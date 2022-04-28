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
    <h1>CONSULTA DE PELÍCULAS POR CATEGORÍA</h1>
    <br>
      <?php
        $categoria=$_POST['categoria'];
        echo $categoria."<br>";
        $mysqli = new mysqli("localhost","root","","sakila",3307);
        if($mysqli->connect_errno){
          echo "Fallo al conectar con la base de datos: (".$mysqli->conmect_errno
          . ")" . $mysqli->conect_error;
        }else{
          //Realizamos consulta para obtener las películas
          $resultado = $mysqli->query("SELECT distinct film_id FROM film_category WHERE category_id=".$categoria.";");
          echo "<fieldset><br><form action='actoresporpeli.php' method='post'>";
          echo "<center><label for='pelicula'>PELÍCULA:</label>";
          echo "<select name='pelicula'>";
          for($i=0;$i<$resultado->num_rows;$i++){
            $fila = $resultado->fetch_assoc();
            $film_id = $fila['film_id'];
            $peli = $mysqli->query("SELECT title FROM film WHERE film_id=".$film_id.";");
            $fila = $peli->fetch_assoc();
            echo "<option value=".$film_id.">".$fila['title']."</option>";
          }
          echo "</select><br><br>";
          
        }
?>
      <input type='submit' value='Consultar'>
      </center>
      </form>
    </fieldset>
  </body>
</html>
