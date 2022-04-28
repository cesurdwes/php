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
       <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio Equipos</a>
      <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'indexJugador.php'">Inicio Jugadores</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'indexJugador.php'">Resultados</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'listado_jugadores.php'">Jugadores</a>
    </div>
  </header>
  <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 5 - Unidad 5 - CRUD</h2>
  <fieldset>
    <?php
    include 'modelo/Equipo.php';
    //Obtenemos los parámetros
    $codigo = $_GET['w1'];
    $nombre = $_GET['w2'];
    $procedencia = $_GET['w3'];
    $altura = $_GET['w4'];
    $peso = $_GET['w5'];
    $posicion = $_GET['w6'];
    $equipoJugador = $_GET['w7'];

    echo "<legend>Datos del nuevo jugador</legend>";
    echo "<form method=\"post\" action=\"modelo/actualizarJugadorDB.php\">";
    echo "<Label>Código</Label><br>";
    echo "<input type='text' id='codigo' name='codigo' value='".$codigo."' required readonly><br>";
    echo "<Label>Nombre</Label><br>";
    echo "<input type='text' id='nombre' name='nombre' value='".$nombre."' required ><br>";
    echo "<Label>Procedencia</Label><br>";
    echo "<input type='text' id='procedencia' name='procedencia' value='".$procedencia."' required ><br>";
    echo "<Label>Altura</Label><br>";
    echo "<input type='text' id='altura' name='altura' value='".$altura."' required ><br>";
    echo "<Label>Peso</Label><br>";
    echo "<input type='text' id='peso' name='peso' value='".$peso."' required ><br>";
    echo "<Label>Posición</Label><br>";
    echo "<input type='text' id='posicion' name='posicion' value='".$posicion."' required ><br>";
    echo "<Label>Equipo</Label><br>";
    echo '<select name="Nombre_equipo">';
    $bbdd = new Equipo();
    $lista_equipos=$bbdd->devolverEquipos();
    foreach ($lista_equipos as $equipo){
      echo '<option value="'.$equipo['Nombre'].'"';
      if ($equipo['Nombre']==$equipoJugador)
        echo 'selected ';
      echo '>'.$equipo['Nombre'].'</option>';
    }
    echo "</select></br></br>";
    echo "<input type=\"submit\" class=\"w3-button w3-black\" value=\"Actualizar Jugador\">";
    echo "</form>";
    ?>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
