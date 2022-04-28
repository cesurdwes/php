<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../estilo.css">
    <script>

      //Pasamos los datos de jugador
      function actualiza_registro(codigo,nombre,procedencia,altura,peso,posicion,equipo){
          window.location.assign("../actualizarJugador.php?w1="+codigo+"&w2="+nombre+"&w3="+procedencia+
            "&w4="+altura+"&w5="+peso+"&w6="+posicion+"&w7="+equipo);
      }

      //Pasamos sólo el código
      function borrar_registro(codigo){
          window.location.assign("borrarJugadorDB.php?w1=" + codigo);
      }

    </script>
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

        if(isset($_POST['nombre']) && !is_null($_POST['nombre'])
          && isset($_POST['procedencia']) && !is_null($_POST['procedencia'])
            && isset($_POST['altura']) && !is_null($_POST['altura'])
              && isset($_POST['peso']) && !is_null($_POST['peso'])
                && isset($_POST['posicion']) && !is_null($_POST['posicion'])
                  && isset($_POST['Nombre_equipo']) && !is_null($_POST['Nombre_equipo'])){

            //Obtenemos los datos
            $nombre_jugador = $_POST['nombre'];
            $procedencia = $_POST['procedencia'];
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            $posicion = $_POST['posicion'];
            $equipo = $_POST['Nombre_equipo'];

            //Llamamos al fichero que contiene la conexión y a la clase jugador
            include('Jugador.php');

            //Creamos los objetos necesarios
            $bbdd = new Jugador();

            echo "<legend><b>Datos del nuevo jugador insertado</b></legend>";

            //Insertamos el jugador y lo almacenamos en memoria
            $jugador = $bbdd->insertarJugador($nombre_jugador,$procedencia,$altura,$peso,$posicion,$equipo);
            //Evaluamos los resultados
            if($jugador!=null){
              echo "<h4>Último registro modificado</h4>";
              echo "<h4>Nombre: ".$jugador->getNombreJugador()."</h4>";
              echo "<h4>Procedencia: ".$jugador->getProcedencia()."</h4>";
              echo "<h4>Altura: ".$jugador->getAltura()."</h4>";
              echo "<h4>Peso: ".$jugador->getPeso()."</h4>";
              echo "<h4>Posición: ".$jugador->getPosicion()."</h4>";
              echo "<h4>Equipo: ".$jugador->getEquipo()."</h4></br>";
              echo "<button class=\"w3-button w3-black\" onclick=\"actualiza_registro('".$jugador->getCodigo()."','".$jugador->getNombreJugador()."','".$jugador->getProcedencia()."','".$jugador->getAltura()."','".$jugador->getPeso()."','".$jugador->getPosicion()."','".$jugador->getEquipo()."')\">Actualizar Registro</button><br><br>";
              echo "<button class=\"w3-button w3-black\" onclick=\"borrar_registro('".$jugador->getCodigo()."')\">Borrar Registro</button>";
            }
            else{
              echo "<h2>Ha habido un error en la inserción<h2>";
            }
        }
        else{
          echo "<h2>Por favor, especifica un jugador</h2>";
        }
        ?>
      </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
