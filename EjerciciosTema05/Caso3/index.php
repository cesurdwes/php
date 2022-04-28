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
    <legend>Datos del nuevo equipo</legend>
    <form method="post" action="modelo/insertarDB.php">
      <Label>Nombre</Label><br>
      <input type="text" id="nombre" name="nombre" required>
      <br><br>
      <Label>Ciudad</Label><br>
      <input type="text" id="ciudad" name="ciudad" required>
      <br><br>
      <Label>Conferencia</Label><br>
      <select name="conferencia">
        <option value="East">East</option>
        <option value="West">West</option>
      </select></br></br>
      <Label>División</Label><br>
      <select name="division">
        <option value="Atlantic">Atlantic</option>
        <option value="Central">Central</option>
        <option value="SouthEast">SouthEast</option>
        <option value="NorthWest">NorthWest</option>
        <option value="Pacific">Pacific</option>
        <option value="SouthWest">SouthWest</option>
      </select></br></br>
      <input type="submit" class="w3-button w3-black" value="Guardar Equipo">
      </form>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
