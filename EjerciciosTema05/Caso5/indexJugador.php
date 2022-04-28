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
    <legend>Datos del nuevo jugador</legend>
    <form method="post" action="modelo/insertarJugadorDB.php">
      <Label>Nombre</Label><br>
      <input type="text" id="nombre" name="nombre" required>
      <br>
      <Label>Procedencia</Label><br>
      <input type="text" id="procedencia" name="procedencia">
      <br>
      <Label>Altura</Label><br>
      <input type="text" id="altura" name="altura" required>
      <br>
      <Label>Peso</Label><br>
      <input type="text" id="peso" name="peso" required>
      <br>
      <Label>Posicion</Label><br>
      <input type="text" id="posicion" name="posicion" required>
      <br>
      <Label>Equipo</Label><br>
      <select name="Nombre_equipo">
      <?php
        //Obtengo el listado de equipos de la base de datos
        include 'modelo/Equipo.php';
        $bbdd = new Equipo();
        $lista_equipos=$bbdd->devolverEquipos();
        foreach($lista_equipos as $equipo){
          echo '<option value="'.$equipo['Nombre'].'">'.$equipo['Nombre'].'</option>';
        }
      ?>
      </select></br></br></br>
      <input type="submit" class="w3-button w3-black" value="Guardar Jugador">
      </form>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
