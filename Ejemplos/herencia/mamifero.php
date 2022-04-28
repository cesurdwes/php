<?php
/**
 * Clase Padre
 */
class Mamifero
{
  //Propiedades
  private $patas;
  private $nombre;

  function __construct()
  {
    echo "Clase Mamifero<br>";
  }

    /**
     * Get the value of Clase Padre
     *
     * @return mixed
     */
    public function getPatas()
    {
        return $this->patas;
    }

    /**
     * Set the value of Clase Padre
     *
     * @param mixed patas
     *
     */
    public function setPatas($patas)
    {
        $this->patas = $patas;

    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}

 ?>
