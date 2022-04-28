<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carrito de compra</title>
    <style media="screen">
    h1{
      text-align: center;
      color: #006400;
    }
    #cabecera{
      font-weight: bold;
      background-color: #2E8B57;
      font-size: 20px;
    }
    td{
      text-align: center;
      width: 200px;
      padding: 5px;
    }
    table{
      background-color: #3CB371;
      border-color: #006400;
      color: #006400;
      border-spacing: 0;
    }
    table, tr, td {
    border: 1px solid #006400;
    }
    </style>
  </head>
  <body>
    <table>
      <tr id="cabecera">
        <td>Nombre del producto</td>
        <td>Cantidad</td>
      </tr>
    <?php

    if (isset($_POST['cantidadPr1'])) {
        setcookie("Producto_1",$_POST['cantidadPr1'],time()+86400);
    }

      if (isset($_POST['cantidadPr2'])) {
        setcookie("Producto_2",$_POST['cantidadPr2'],time()+86400);
      }

      if (isset($_POST['cantidadPr3'])) {
        setcookie("Producto_3",$_POST['cantidadPr3'],time()+86400);
      }

      if (isset($_POST['cantidadPr4'])) {
        setcookie("Producto_4",$_POST['cantidadPr4'],time()+86400);
      }
      foreach ($_COOKIE as $key => $value) {
        if ($key != "PHPSESSID") {

        ?>
        <tr>
          <td><?php echo $key; ?></td>
          <td><?php echo $value; ?></td>
        </tr>
        <?php
      }
    }
     ?>

     </table>
  </body>
</html>
