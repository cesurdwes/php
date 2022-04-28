<?php
  include ("color.php");
 ?>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Conversion de colores</title>
   </head>
   <body>
     <?php
        $color = new Color();
        if(isset($_POST["colorhex"])&&!empty($_POST["colorhex"])&&
        ((substr($_POST["colorhex"],0,1)=="#"))){
          $color->setColorHexa($_POST["colorhex"]);
          $color->conversion();
        }
        else {
          echo "Compruebe el formato hexadecimal!!";
        }
      ?>
   </body>
 </html>
