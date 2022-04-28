<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <div class="navegacion">
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'actores.php'">Actores</a>
        <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'episodios_formulario.php'">Actores por Episodio</a>
      </div>
    </header>
      <fieldset>
        <?php

          if(isset($_POST['episodio']) && !is_null($_POST['episodio'])){

            //Obtenemos el episodio
            $episodio = $_POST['episodio'];

            //Llamamos al fichero que contiene la conexión
            include('tronos.php');

            //Creamos un nuevo objeto de conexión
            $bbdd = new Tronos();

            echo "<legend><b>Listado de actores del episodio ".$episodio." de la Temporada 1</b></legend>";

            //Obtenemos los Resultados
            $listado_actores = $bbdd->devolverListadoActoresPorEpisodio($episodio);

            //Evaluamos si hay datos
            if($listado_actores!=null){

              echo "<div id=\"tabla\"></div>";

              //Como hay datos comenzamos a construir una tabla con la cabecera. El cuerpo se creará dentro del bucle
              echo "<table class=\"w3-table w3-bordered\">";
              echo "<tr><th>Nombre Real</th><th>Nombre en la Serie</th></tr>";
              foreach ($listado_actores as $actor) {
                echo "<tr><td>".$actor['name']."</td><td>".$actor['serie_name']."</td></tr>";
              }
              echo "</table>";
            }
            else{
              echo "<h4>No hay resultados en la tabla de actores</h4>";
            }
          }
          else{
            echo "<h4>Por favor, especifique un episodio</h4>";
          }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
