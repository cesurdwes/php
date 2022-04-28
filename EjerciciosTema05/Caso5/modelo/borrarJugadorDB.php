<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../estilo.css">
  </head>
  <body>
    <header>
       <div class="navegacion">
        <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = '../index.php'">Inicio</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = '../indexJugador.php'">Resultados</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = '../listado_jugadores.php'">Jugadores</a>
      </div>
    </header>
      <fieldset>
        <?php
            //Obtenemos los parámetros
            $codigo = $_GET['w1'];

            //Llamamos al fichero que contiene la conexión y a la clase Jugador
            include('Jugador.php');

            //Creamos los objetos necesarios
            $bbdd = new Jugador();

            //Insertamos el equipo y lo almacenamos en memoria
            $borrado = $bbdd->borrar_jugador($codigo);

            //Evaluamos los resultados
            if($borrado){
              echo "<h4>Jugador borrado</h4>";
              echo "<h4>Se ha borrado el jugador con código: ".$codigo."</h4>";
            }
            else{
              echo "<h2>Ha habido un error a la hora de borrar el equipo<h2>";
            }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
