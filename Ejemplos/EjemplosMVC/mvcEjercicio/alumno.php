<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar nuevo alumno</title>
  </head>
  <body>
        <center>
          <fieldset>
            <h2>Insertar nuevo alumno</h2>
            <form action='alumnoNuevo.php' method=post>
              <br><br><label for='nombre'>Nombre:</label>
              <input type=text name='nombre'><br><br>
              <label for='apellidos'>Apellidos:</label>
              <input type=text name='apellidos'><br><br>
              <label for='edad'>Edad:</label>
              <input type=text name='edad'><br>
              <br><br><input type='submit' value='Insertar'>
            </form>
          </fieldset>
        </center>
    </form>
  </body>
  </html>