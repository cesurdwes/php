<?php

    require 'imagen.php';

    $imagen1 = new Imagen("nasa.png",5);
    $imagen1 -> setBorder(1);
    $imagen1 -> setSrc("nasa.png");
    echo $imagen1 -> __toString()."<hr>";
    ?>

