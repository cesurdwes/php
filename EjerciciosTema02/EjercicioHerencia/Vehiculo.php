<?php
class Vehiculo
{
    // Cuando una propiedad o un método son definidas como protected éstas quedan accesibles para las clases hijas.
    protected $litros = 0;

    public function __construct()
    {
        echo "Constructor definido en Vehiculo.\n";
    }

    public function repostar($litros)
    {
        if ($litros>0) {
            $this->litros += $litros;
        }
    }

    public function litrosEnDeposito()
    {
        return $this->litros;
    }
}
?>
