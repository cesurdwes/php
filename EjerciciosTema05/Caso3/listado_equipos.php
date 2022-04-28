<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
    <script>
      //Pasamos sólo el nombre
      function borrar_equipo(nombre){
          window.location.assign("modelo/borrarDB.php?w1=" + nombre);
      }
    </script>
  </head>
  <body>
    <header>
      <div class="navegacion">
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Resultados</a>
        <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'listado_equipos.php'">Equipos</a>
      </div>
    </header>
      <fieldset>
        <?php

          //Llamamos al fichero que contiene la conexión
          include('modelo/dbNBA.php');

          //Creamos un nuevo objeto de conexión
          $bbdd = new BBDD();

          echo "<legend><b>Listado de equipos</b></legend>";

          //Obtenemos los Resultados
          $listado_equipos = $bbdd->listado_equipos();

          //Evaluamos si hay datos
          if($listado_equipos->num_rows > 0){

            echo "<div id=\"tabla\"></div>";

            //Como hay datos comenzamos a construir una tabla con la cabecera
            //El cuerpo se creará dentro del bucle
            echo "<table class=\"w3-table w3-bordered\">";
            echo "<tr><th>Nombre</th><th>Ciudad</th><th>Conferencia</th><th>División</th><th>Acción</th></tr>";
            for ($i=0; $i < $listado_equipos->num_rows; $i++) {
              $equipo = $listado_equipos->fetch_assoc();
              echo "<tr><td>".$equipo['Nombre']."</td><td>".$equipo['Ciudad']."</td><td>".$equipo['Conferencia']."</td>
                <td>".$equipo['Division']."</td><td><button class=\"w3-button w3-black\" onclick=\"borrar_equipo('".$equipo['Nombre']."')\">Borrar</button></td></tr>";
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
