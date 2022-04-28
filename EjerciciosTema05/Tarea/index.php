<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DWES</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <header>
    <div class="navegacion">
      <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Resultados</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Equipos</a>
    </div>
  </header>
  <h2>Tarea - Unidad 5 - Creando el primer modelo</h2>
  <?php
    //Llamamos al fichero que contiene la conexión
    include('jugador.php');

    //Creamos un nuevo objeto de conexión
    $bbdd = new Jugador();

    //Obtenemos los objetos con los que operar
    $listado_equipos_partidos = $bbdd->devolverEquipos();
    $datos_equipo = $bbdd->devolverEquipos();
    $maximos_anotadores = $bbdd->devolverMaximosAnotadores();
    $maximos_asistentes = $bbdd->devolverMaximosAsistentes();
  ?>

  <fieldset>
    <fieldset style="width:48%; float:left">
    <legend>Mostrar partidos por equipo</legend>
    <form method="post" action="resultados_por_equipo.php">
      <?php
        //Evaluamos si hay datos
        if($listado_equipos_partidos!=null){

          //Como hay datos comenzamos a construir el select
          echo "<label>Nombre del equipo</Label><br>";
          echo "<select name=\"equipo_seleccionado\">";
          foreach ($listado_equipos_partidos as $equipo) {
            $nombre_equipo = $equipo['Nombre'];
            echo "<option value=\".$nombre_equipo.\">".$nombre_equipo."</option>";
          }
          echo "</select>";
        }
        else{
          echo "<h4>No hay resultado en la tabla especificada</h4>";
        }
      ?>
      <br>
      <br>
      <input type="submit" class="w3-button w3-black" value="Ver partidos">
      </form>
    </fieldset>

    <fieldset style="width:48%; float:right">
      <legend>Mostrar datos del equipo</legend>
      <form method="post" action="datos_equipo.php">
      <?php

        //Evaluamos si hay datos
        if($datos_equipo!=null){

          //Como hay datos comenzamos a construir el select
          echo "<label>Nombre del equipo</Label><br>";
          echo "<select name=\"equipo_seleccionado\">";
          foreach ($datos_equipo as $equipo){
            $nombre_equipo = $equipo['Nombre'];
            echo "<option value=\".$nombre_equipo.\">".$nombre_equipo."</option>";
          }
          echo "</select>";
        }
        else{
          echo "<h4>No hay resultado en la tabla especificada</h4>";
        }
      ?>
      <br>
      <br>
      <input type="submit" class="w3-button w3-black" value="Ver Equipo">
    </form>
    </fieldset>
  </fieldset>
      <fieldset>
        <legend>Máximos anotadores y asistentes por temporada</legend>
        <div style="width:48%;float:left">
        <?php

          //Evaluamos si hay datos
          if(count($maximos_anotadores) > 0){
            echo "<table class=\"w3-table w3-bordered\">";
            echo "<tr><th>Puntuación</th><th>Nombre</th><th>Equipo</th><th>Temporada</th></tr>";
            for ($i=0; $i < count($maximos_anotadores); $i++) {
              $anotador = $maximos_anotadores[$i];
              echo "<tr><td>".$anotador[0]."</td><td>".$anotador[1]."</td><td>".$anotador[2]."</td><td>".$anotador[3]."</td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "<h4>No hay resultado en la tabla especificada</h4>";
          }

          echo "</div>";
          echo "<div style=\"width:48%;float:right\">";

          //Evaluamos si hay datos
          if(count($maximos_asistentes) > 0){

            echo "<table class=\"w3-table w3-bordered\">";
            echo "<tr><th>Asistencias</th><th>Nombre</th><th>Equipo</th><th>Temporada</th></tr>";
            for ($i=0; $i < count($maximos_asistentes); $i++) {
              $asistente = $maximos_asistentes[$i];
              echo "<tr><td>".$asistente[0]."</td><td>".$asistente[1]."</td><td>".$asistente[2]."</td><td>".$asistente[3]."</td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "<h4>No hay resultado en la tabla especificada</h4>";
          }
        ?>
      </div>
    </fieldset>
    <footer>
      <h6>Asignatura: Desarrollo Web Entorno Servidor</h6>
    </footer>
  </body>
</html>
