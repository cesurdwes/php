<?php

  class Color
  {
    //declaramos el parametro de la clase Color
    private $colorHexa =" ";

     //metodos get y set de la clase Color
    public function getColorHexa(){
      return $this->colorHexa;
    }

    public function setColorHexa($colorHexa){
      $this->colorHexa = $colorHexa;
    }

    //El metodo que convierte el valor hexadecimal en rgb
    public function conversion(){
      $rojo = hexdec(substr($this->colorHexa,1,2));
      $verde = hexdec(substr($this->colorHexa,3,2));
      $azul = hexdec(substr($this->colorHexa,5,2));

      echo "El color RGB es rgb( ".$rojo.", ".$verde.", ".$azul." )";
    }
  }

 ?>
