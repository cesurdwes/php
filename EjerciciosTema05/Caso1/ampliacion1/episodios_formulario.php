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
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'index.php'">Inicio</a>
      <a class="navegacion_izquierda texto_navegacion" onclick="location.href = 'actores.php'">Actores</a>
      <a id="activo" class="navegacion_izquierda texto_navegacion" onclick="location.href = 'episodios_formulario.php'">Actores por Episodio</a>
    </div>
  </header>
  <h2>Caso Práctico 1 - Unidad 5 - Game of thrones</h2>
  <fieldset>
    <legend>Actores por episodio</legend>
    <form method="post" action="actoresTemp.php">
      <label>Seleccione el episodio de la Temporada 1</Label><br>
        <select name="episodio">
          <option value="1">Episodio 1</option>
          <option value="2">Episodio 2</option>
          <option value="3">Episodio 3</option>
          <option value="4">Episodio 4</option>
          <option value="5">Episodio 5</option>
          <option value="6">Episodio 6</option>
          <option value="7">Episodio 7</option>
          <option value="8">Episodio 8</option>
          <option value="9">Episodio 9</option>
          <option value="10">Episodio 10</option>
      </select><br><br>
      <input type="submit" class="w3-button w3-black" value="Buscar Actores">
    </form>
    </fieldset>
    <footer>
      <h6>Asignatura: DWES</h6>
    </footer>
  </body>
</html>
