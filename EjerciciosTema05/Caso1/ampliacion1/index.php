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
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'actores.php'">Actores</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'episodios_formulario.php'">Actores por Episodio</a>
    </div>
  </header>
  <h2>Caso Práctico 1 - Unidad 5 - Game of thrones</h2>
  <fieldset>
    <legend>Resumen de la serie</legend>
      <?php
        //Llamamos al fichero que contiene la conexión
        include('tronos.php');

        //Creamos un nuevo objeto de conexión
        $bbdd = new Tronos();

        //Obtenemos el resumen de la serie
        $resumen = $bbdd->devolverResumenSerie();

        //Evaluamos si hay datos
        if($resumen!=null){
          foreach ($resumen as $res) {
            echo "<h4><strong>Título:</strong> ".$res['title']."</h4>";
            echo "<h6><strong>Resumen:</strong> ".$res['plot']."</h6>";
            echo "<h6><strong>Creadores:</strong> ".$res['creators']."</h6>";
            echo "<h6><strong>Número de temporadas:</strong> ".$res['seasons']." (".$res['season_start']."-".$res['season_end'].")</h6>";
            echo "<h6><strong>Género:</strong> ".$res['generes']."</h6";
          }
          echo "<br>";
        }
        else{
          echo "<h4>No hay resultado en la tabla especificada</h4>";
        }
      ?>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
