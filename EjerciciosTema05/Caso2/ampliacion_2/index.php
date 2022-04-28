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
  <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 2 - Unidad 5 - Filtrado NBA</h2>
  <fieldset>

    <legend>Filtrar partidos</legend>
    <form method="post" action="filtrado.php">
      <?php
        //Llamamos al fichero que contiene la conexión
        include('dbNBA.php');

        //Creamos un nuevo objeto de conexión
        $bbdd = new BBDD();

        //Obtenemos los equipos y las temporadas disponibles
        $listado_equipos_local = $bbdd->devolverEquipos();
        $listado_equipos_visitante = $bbdd->devolverEquipos();
        $listado_temporadas = $bbdd->devolverTemporadas();

        //Evaluamos si hay datos
        if($listado_equipos_local->num_rows > 0){

          //Como hay datos comenzamos a construir el select
          echo "<label>Equipo Local</Label><br>";
          echo "<select name=\"equipo_local\">";
          for ($i=0; $i < $listado_equipos_local->num_rows; $i++) {
            $equipo = $listado_equipos_local->fetch_assoc();
            $nombre_equipo = $equipo['Nombre'];
            echo "<option value=\".$nombre_equipo.\">".$nombre_equipo."</option>";
          }
          echo "</select>";
          echo "<br><br>";
          echo "<label>Equipo Visitante</Label><br>";
          echo "<select name=\"equipo_visitante\">";
          for ($i=0; $i < $listado_equipos_visitante->num_rows; $i++) {
            $equipo = $listado_equipos_visitante->fetch_assoc();
            $nombre_equipo = $equipo['Nombre'];
            echo "<option value=\".$nombre_equipo.\">".$nombre_equipo."</option>";
          }
          echo "</select>";
          echo "<br><br>";

          if($listado_temporadas->num_rows>0){
            echo "<label>Temporada</Label><br>";
            echo "<select name=\"temporada\">";
            for ($i=0; $i < $listado_temporadas->num_rows; $i++) {
              $temporada = $listado_temporadas->fetch_assoc();
              $nombre_temporada = $temporada['temporada'];
              echo "<option value=\".$nombre_temporada.\">".$nombre_temporada."</option>";
            }
            echo "</select>";
            echo "<br><br>";
          }
          else{
            echo "<h4>No hay resultado en la tabla especificada</h4>";
          }
        }
        else{
          echo "<h4>No hay resultado en la tabla especificada</h4>";
        }
        echo "<input type=\"submit\" class=\"w3-button w3-black\" value=\"Ver partidos\">";
      ?>
      </form>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
