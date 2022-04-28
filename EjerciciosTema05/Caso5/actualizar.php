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
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'listado_equipos.php'">Equipos</a>
    </div>
  </header>
  <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 3 - Unidad 5 - CRUD</h2>
  <fieldset>
    <?php

    //Obtenemos los parámetros
    $nombre_equipo = $_GET['w1'];
    $ciudad_equipo = $_GET['w2'];

    echo "<legend>Datos del nuevo equipo</legend>";
    echo "<form method=\"post\" action=\"modelo/actualizarDB.php\">";
    echo "<Label>Nombre</Label><br>";
    echo "<input type='text' id='nombre' name='nombre' value='".$nombre_equipo."' required readonly><br><br>";

    echo "<Label>Ciudad</Label><br>";
    echo "<input type='text' id='ciudad' name='ciudad' value='".$ciudad_equipo."' required><br><br>";

    echo "<Label>Conferencia</Label><br>";
    echo "<select name=\"conferencia\">";
      echo "<option value=\"East\">East</option>";
      echo "<option value=\"West\">West</option>";
    echo "</select></br></br>";

    echo "<Label>División</Label><br>";
    echo "<select name=\"division\">";
      echo "<option value=\"Atlantic\">Atlantic</option>";
      echo "<option value=\"Central\">Central</option>";
      echo "<option value=\"SouthEast\">SouthEast</option>";
      echo "<option value=\"NorthWest\">NorthWest</option>";
      echo "<option value=\"Pacific\">Pacific</option>";
      echo "<option value=\"SouthWest\">SouthWest</option>";
    echo "</select></br></br>";
    echo "<input type=\"submit\" class=\"w3-button w3-black\" value=\"Actualizar Equipo\">";
    echo "</form>";
    ?>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
