<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DWES</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="estilo.css">
  <style>
    body {
      <?php
        if($_COOKIE["color"]!=null){
          echo "background-color:".$_COOKIE["color"].";";
        }
        else{
          echo "background-color:white;";
        }
      ?>}
</style>
</head>
<body>
  <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 3 - Unidad 6 - Color</h2>
  <fieldset>
    <?php
    //Establecer conexión BBDD y gestión de sesiones
    include('bbdd.php');
    include('seguridad.php');

    $bbdd = new BBDD();

    //Obtener pos POST el usuario que es el email
    if(isset($_POST['usuario']) && !is_null($_POST['usuario'])
        && isset($_POST['password']) && !is_null($_POST['password'])){

          $usuario_existente = $bbdd->buscarUsuario($_POST['usuario'],sha1($_POST['password']));

          if($usuario_existente!= null){

            //Mostramos un mensaje de bienvenida
            echo "<h4>Bienvenido usuario ".$usuario_existente->getNombre()."</h4>";

            //Como el usuario existe iniciamos la sesión y guardamos los datos
            $seguridad = new Seguridad();
            $seguridad->addUsuario($_POST['usuario']);

            echo '<form action="actualizar_miperfil.php" method="post">';
              echo '<label>email</label></br>';
              echo "<input type='text' id='email' name='email' value='".$usuario_existente->getEmail()."' readonly></br>";
              echo '<label>Nombre</label></br>';
              echo "<input type='text' id='nombre' name='nombre' value='".$usuario_existente->getNombre()."' required></br>";
              echo '<label>Apellidos</label></br>';
              echo "<input type='text' id='apellidos' name='apellidos' value='".$usuario_existente->getApellidos()."'required></br>";
              echo '<label>Rol</label></br>';
              echo "<select name=\"color\">";
                if($_COOKIE["color"]!=null && $_COOKIE["color"]=="red"){
                  echo "<option value=\"red\" selected>Rojo</option>";
                }
                else{
                  echo "<option value=\"red\">Rojo</option>";
                }
                if($_COOKIE["color"]!=null && $_COOKIE["color"]=="green"){
                  echo "<option value=\"green\" selected>Verde</option>";
                }
                else{
                  echo "<option value=\"green\">Verde</option>";
                }
                if($_COOKIE["color"]!=null && $_COOKIE["color"]=="blue"){
                  echo "<option value=\"blue\" selected>Azul</option>";
                }
                else{
                  echo "<option value=\"blue\">Azul</option>";
                }
                if($_COOKIE["color"]!=null && $_COOKIE["color"]=="white"){
                  echo "<option value=\"white\" selected>Blanco</option>";
                }
                else{
                  echo "<option value=\"white\">Blanco</option>";
                }
              echo "</select></br></br>";
              echo '<input type="submit" class="w3-button w3-black" value="ACTUALIZAR">';
          echo '</form></br>';
          }
          else{
            echo "<h4>El usuario no existe en la BBDD</h4>";
            echo "<p>Pulse el siguiente <a href='index.php'>enlace</a> para volver al formulario</p>";
          }
    }
    else{
      header('Location:index.php');
    }
    ?>
  </fieldset>
  <footer>
    <h6>Asignatura: DWES</h6>
  </footer>
  </body>
</html>
