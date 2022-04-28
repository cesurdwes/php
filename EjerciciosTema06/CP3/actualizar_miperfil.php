<?php
  if($_POST['color']!=null){
    $color = $_POST['color'];
  }
  else{
    $color = "white";
  }
?>
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
        if($color!="white"){
          echo "background-color:".$color.";";
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
    if(isset($_POST['nombre']) && !is_null($_POST['nombre'])
        && isset($_POST['apellidos']) && !is_null($_POST['apellidos'])){

          //Establecemos la cookie
          setcookie("color",$_POST['color'],time()+86400);

          $actualizar_usuario = $bbdd->actualizarUsuario($_POST['email'],$_POST['nombre'],$_POST['apellidos']);

          if($actualizar_usuario!= null){

            //Mostramos un mensaje de actualización
            echo "<h4>Se han modificado los datos del usuario ".$actualizar_usuario->getNombre()."</h4>";
            echo "<p>Pulse el siguiente <a href='index.php'>enlace</a> para volver al inicio</p>";
          }
          else{
            echo "<h4>Ha habido un error en la actualización.".$bbdd->getErrorConexion()."</h4>";
            echo "<p>Pulse el siguiente <a href='miperfil.php'>enlace</a> para volver al formulario</p>";
          }

          //Borramos los datos de la sesión
          $seguridad = new Seguridad();
          $seguridad->borrarDatos();
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
