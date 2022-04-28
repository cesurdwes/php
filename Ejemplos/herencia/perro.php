<?php
/**
 *
 */
class Perro extends Mamifero
{
  //Propiedades
  private $raza;

  function __construct()
  {
    echo "Clase Perro<br>";
  }

    /**
     * Get the value of Raza
     *
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set the value of Raza
     *
     * @param mixed raza
     *
     * @return self
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

}

 ?>
