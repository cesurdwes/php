<?php

// getters & setters

class Persona
{
    private $edad;

    public function setEdad($edad)
    {
        if (is_numeric($edad) && $edad >=0) {
            $this->edad = $edad;
        }
    }

    public function getEdad()
    {
        return $this->edad;
    }
}

$yo = new Persona();
$yo->setEdad(40);
echo "Tengo {$yo->getEdad()} años". PHP_EOL;

?>
