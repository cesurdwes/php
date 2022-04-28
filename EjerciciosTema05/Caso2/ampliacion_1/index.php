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

    <legend>Filtrar partidos como local del Equipo</legend>
    <form method="post" action="filtrado.php">
      <Label>Equipo Local</Label><br>
      <input type="text" id="equipo_local" name="equipo_local" required>
      <br><br>
      <Label>Equipo Visitante</Label><br>
      <input type="text" id="equipo_visitante" name="equipo_visitante" required>
      <br><br>
      <Label>Temporada</Label><br>
      <input type="text" id="temporada" name="temporada" required>
      <br><br>
      <input type="submit" class="w3-button w3-black" value="Ver partidos">
      </form>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
