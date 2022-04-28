<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina de inicio</title>
    <style media="screen">
      .carrito{
        position: relative;
        float: right;
        text-decoration: none;
        color:green;
      }
      .container{
        width: 75%;
        height: auto;
        margin: auto;
        padding: 0;
        font-size: 17px;
      }
      h1{
        text-align: center;
      }
      li{
        list-style: none;
        display: inline-block;
        position: relative;
        float: left;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">

      <h1>Tus compras online</h1>
      <br><hr><br>
      <a href="carrito.php" class="carrito">Tu carrito</a><br>
      <ul>
        <li><a href="producto1.php">Producto 1</a></li>

        <li><a href="producto2.php">Producto 2</a></li>

        <li><a href="producto3.php">Producto 3</a></li>

        <li><a href="producto4.php">Producto 4</a></li>
      </ul>

    </div>
  </body>
</html>
