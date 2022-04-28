<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar usuarios desde la BD</title>
  </head>
  <body>
    <?php
    include "Usuario.php";

    //Nuevo objeto de usuarios
    $users=new Usuario();

    //Preseentamos la tabla de usuarios
    ?>
    <table>
      <tr>
        <td>id</td>
        <td>nombre</td>
        <td>apellidos</td>
        <td>edad</td>
      </tr>
      <?php
      $tabla=$users->devolverUsuarios();
      foreach ($tabla as  $fila) {
      ?>
      <tr>
        <td><?=$fila["id"]?></td>
        <td><?=$fila["nombre"]?></td>
        <td><?=$fila["apellidos"]?></td>
        <td><?=$fila["edad"]?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
