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

        //Llamamos al fichero que contiene la conexión
        include('jugador.php');

        //Creamos un nuevo objeto de conexión
        $bbdd = new Jugador();

        //Obtenemos el equipo seleccionado
        $equipo = substr($_POST['equipo_seleccionado'],1,-1);

        echo "<legend><b>Jugadores del equipo ".$equipo."</b></legend>";

        echo "<div id=\"tabla\"></div>";

        //Obtenemos los Resultados
        $listado_resultados = $bbdd->devolverJugadoresPorEquipo($equipo);

        //Evaluamos si hay datos
        if($listado_resultados!=null){

          //Como hay datos comenzamos a construir una tabla con la cabecera
          //El cuerpo se creará dentro del bucle
          echo "<table class=\"w3-table w3-bordered\">";
          echo "<tr><th>Nombre</th><th>Procedencia</th><th>Altura</th><th>Peso</th><th>Posición</th></tr>";
          foreach ($listado_resultados as $jugador) {
            echo "<tr><td>".$jugador['Nombre']."</td><td>".$jugador['Procedencia']."</td><td>".$jugador['Altura']."</td>
              <td>".$jugador['Peso']."</td><td>".$jugador['Posicion']."</td></tr>";
          }
          echo "</table>";
        }
        else{
          echo "<h4>No hay resultado en la tabla especificada</h4>";
        }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: Desarrollo Web Entorno Servidor</h6>
    </footer>
  </body>
</html>
