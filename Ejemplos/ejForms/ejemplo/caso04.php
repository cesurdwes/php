<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
/* Añadimos formato CSS a la tabla de resultados */
      header, section{
        width: 50%;
        margin: auto;
        text-align: center;
      }
      table{
        width: 50%;
        margin: auto;
        text-align: center;
        border-collapse: collapse;
      }
      td{
        border: 1px solid #000;
        padding: 5px;
        background-color: #a7d2df;
      }
      td:first-child{
        background-color: #fff;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <header>
    <?php
      echo "<h2>¡Hola, " . $_POST["nombre"];
      echo " " . $_POST["apellidos"] . "!</h2><br>";

      echo "<h3>Estas son tus calificaciones de " . $_POST["curso"];
      echo " de " . $_POST["ciclo"] . ":</h3> ";
    ?>
    </header>

    <section>

      <table>
<!-- Incluimos el resultado en una tabla para mejorar la presentación -->
    <?php

      echo "<tr>";
      echo "<td>Programación</td>";
      echo "<td>" . $_POST["prog"] . "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>Entornos de Desarrollo</td>";
      echo "<td>" . $_POST["ed"] . "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>Lenguajes de Marcas</td>";
      echo "<td>" . $_POST["llmm"] . "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>Bases de Datos</td>";
      echo "<td>" . $_POST["bbdd"] . "</td>";
      echo "</tr>";

      echo "</table><br>";
// Utilizamos la función max para calcular el valor máximo
      $alta=max($_POST["prog"], $_POST["ed"], $_POST["llmm"], $_POST["bbdd"]);
// Utilizamos la función min para calcular el valor mínimo
      $baja=min($_POST["prog"], $_POST["ed"], $_POST["llmm"], $_POST["bbdd"]);
// La media, la calculamos sumando todas las calificaciones y dividiendo entre 4
      $media=($_POST["prog"] + $_POST["ed"] + $_POST["llmm"] + $_POST["bbdd"])/4;

      echo "La nota <strong>más alta</strong> es un <strong>" . $alta . "</strong><br><br>";
      echo "La nota <strong>más baja</strong> es un <strong>" . $baja . "</strong><br><br>";
      echo "La nota <strong>media</strong> es <strong>" . $media . "</strong><br>";
     ?>
    </section>
  </body>
</html>
