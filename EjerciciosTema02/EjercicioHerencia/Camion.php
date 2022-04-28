<?php
class Camion extends Vehiculo
{
    private $tieneRemolque = false;

    public function setRemolque($tieneRemolque)
    {
        $this->tieneRemolque = $tieneRemolque;
    }

    public function getRemolque()
    {
        return $this->tieneRemolque;
    }
}
?>
