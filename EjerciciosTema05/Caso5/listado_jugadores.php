<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
    <script>
      //Pasamos sólo el nombre
      function borrar_jugador(codigo){
          window.location.assign("modelo/borrarJugadorDB.php?w1=" + codigo);
      }
    </script>
  </head>
  <body>
    <header>
      <div class="navegacion">
      <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio Equipos</a>
      <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'indexJugador.php'">Inicio Jugadores</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'indexJugador.php'">Resultados</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'listado_jugadores.php'">Jugadores</a>
      </div>
    </header>
      <fieldset>
        <?php

          //Llamamos al fichero que contiene la conexión
          include('modelo/Jugador.php');

          //Creamos un nuevo objeto de conexión
          $bbdd = new Jugador();

          echo "<legend><b>Listado de jugadores</b></legend>";

          //Obtenemos los Resultados
          $listado_jugadores = $bbdd->listado_jugadores();

          //Evaluamos si hay datos
          if($listado_jugadores!=null){

            echo "<div id=\"tabla\"></div>";

            //Como hay datos comenzamos a construir una tabla con la cabecera
            //El cuerpo se creará dentro del bucle
            echo "<table class=\"w3-table w3-bordered\">";
            echo "<tr><th>Nombre</th><th>Procedencia</th><th>Altura</th><th>Peso</th><th>Posición</th><th>Equipo</th><th>Acción</th></tr>";
            foreach ($listado_jugadores as $jugador) {
              echo "<tr><td>".$jugador['Nombre']."</td><td>".$jugador['Procedencia']."</td><td>".$jugador['Altura']."</td>
                <td>".$jugador['Peso']."</td><td>".$jugador['Posicion']."</td><td>".$jugador['Nombre_equipo']."</td><td><button class=\"w3-button w3-black\" onclick=\"borrar_jugador('".$jugador['codigo']."')\">Borrar</button></td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "<h4>No hay resultados en la tabla especificada</h4>";
          }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
