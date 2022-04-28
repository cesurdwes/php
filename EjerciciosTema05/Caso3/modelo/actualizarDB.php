<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../estilo.css">
    <script>

      function actualiza_registro(nombre,ciudad){
          window.location.assign("../actualizar.php?w1=" + nombre +"&w2="+ciudad);
      }

      //Pasamos sólo el nombre
      function borrar_registro(nombre){
          window.location.assign("borrarDB.php?w1=" + nombre);
      }

    </script>
  </head>
  <body>
    <header>
     <div class="navegacion">
        <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = '../index.php'">Inicio</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = '../index.php'">Resultados</a>
        <a class="navegacion_izquierda texto_navegacion" onclick="location.href = '../listado_equipos.php'">Equipos</a>
      </div>
    </header>
      <fieldset>
        <?php
        if(isset($_POST['nombre']) && !is_null($_POST['nombre'])
          && isset($_POST['ciudad']) && !is_null($_POST['ciudad'])
            && isset($_POST['conferencia']) && !is_null($_POST['conferencia'])
              && isset($_POST['division']) && !is_null($_POST['division'])){

            //Obtenemos los datos
            $nombre_equipo = $_POST['nombre'];
            $ciudad_equipo = $_POST['ciudad'];
            $conferencia_equipo = $_POST['conferencia'];
            $division_equipo = $_POST['division'];

            //Llamamos al fichero que contiene la conexión y a la clase Equipo
            include('dbNBA.php');

            //Creamos los objetos necesarios
            $bbdd = new BBDD();

            //Insertamos el equipo y lo almacenamos en memoria
            $equipo = $bbdd->modificarEquipo($nombre_equipo,$ciudad_equipo,$conferencia_equipo,$division_equipo);

            //Evaluamos los resultados
            if($equipo!=null){
              echo "<h4>Último registro modificado</h4>";
              echo "<h4>Nombre: ".$equipo->getNombre()."</h4>";
              echo "<h4>Ciudad: ".$equipo->getCiudad()."</h4>";
              echo "<h4>Conferencia: ".$equipo->getConferencia()."</h4>";
              echo "<h4>División: ".$equipo->getDivision()."</h4></br>";
              echo "<button class=\"w3-button w3-black\" onclick=\"actualiza_registro('".$equipo->getNombre()."','".$equipo->getCiudad()."')\">Actualizar Registro</button><br><br>";
              echo "<button class=\"w3-button w3-black\" onclick=\"borrar_registro('".$equipo->getNombre()."')\">Borrar Registro</button>";
            }
            else{
              echo "<h2>Ha habido un error en la inserción<h2>";
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
