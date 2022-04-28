<?php

    class Imagen  
    {
        private $src;
        private $border = 0;
        private $ruta_images;

        public function __construct($src, $border) {
            $this->border=$border;
            $this->ruta_images="<img src='$src' border='$border'>";
        }

        public function __toString()
        {
            return $this->ruta_images;;
        }

        /**
         * Set the value of src
         *
         * @return  self
         */ 
        public function setSrc($src)
        {
            if (file_exists($src)) {
                $this->src = $src;
            }else {
                exit("No existe el archivo");
            }
        }

        /**
         * Set the value of border
         *
         * @return  self
         */ 
        public function setBorder($border)
        {
            
            if (is_int($border) && $border >= 0) {
                $this->border = $border;
            }else {
                exit("No ha introducido el numero correcto");
            }

        }
    }
?>
