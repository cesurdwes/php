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
        <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Resultados</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Equipos</a>
      </div>
    </header>
      <fieldset>
        <?php

        if(isset($_POST['equipo_local']) && !is_null($_POST['equipo_local'])
          && isset($_POST['equipo_visitante']) && !is_null($_POST['equipo_visitante'])
            && isset($_POST['temporada']) && !is_null($_POST['temporada'])){

            //Obtenemos los datos
            $equipo_local = substr($_POST['equipo_local'],1,-1);
            $equipo_visitante = substr($_POST['equipo_visitante'],1,-1);
            $temporada = substr($_POST['temporada'],1,-1);;

            //Llamamos al fichero que contiene la conexión
            include('dbNBA.php');

            //Creamos un nuevo objeto de conexión
            $bbdd = new BBDD();

            echo "<legend><b>Resultados para el equipo local ".$equipo_local."</b></legend>";

            //Obtenemos los Resultados
            $listado_resultados = $bbdd->devolverPartidosPorEquipo($equipo_local,$equipo_visitante,$temporada);

            //Evaluamos si hay datos
            if($listado_resultados->num_rows > 0){

              echo "<div id=\"tabla\"></div>";

              //Como hay datos comenzamos a construir una tabla con la cabecera
              //El cuerpo se creará dentro del bucle
              echo "<table class=\"w3-table w3-bordered\">";
              echo "<tr><th>Local</th><th>Puntos</th><th>Visitante</th><th>Puntos</th><th>Temporada</th></tr>";
              for ($i=0; $i < $listado_resultados->num_rows; $i++) {
                $partido = $listado_resultados->fetch_assoc();
                echo "<tr><td>".$partido['equipo_local']."</td><td>".$partido['puntos_local']."</td><td>".$partido['equipo_visitante']."</td>
                  <td>".$partido['puntos_visitante']."</td><td>".$partido['temporada']."</td></tr>";
              }
              echo "</table>";
            }
            else{
              echo "<h4>No hay resultados en la tabla especificada para este equipo</h4>";
            }
        }
        else{
          echo "<h2>Por favor, especifica un equipo</h2>";
        }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
