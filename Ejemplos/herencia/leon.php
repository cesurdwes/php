<?php
/**
 * Clase leon
 */
class Leon extends Mamifero
{
  //Propiedades
  private $continente;

  function __construct()
  {
    //Utilizar el operador de ambito de clases
    parent::__construct();
    echo "Clase Leon<br>";
  }

    /**
     * Get the value of Clase leon
     *
     * @return mixed
     */
    public function getContinente()
    {
        return $this->continente;
    }

    /**
     * Set the value of Clase leon
     *
     * @param mixed continente
     *
     */
    public function setContinente($continente)
    {
        $this->continente = $continente;
    }

}

 ?>
