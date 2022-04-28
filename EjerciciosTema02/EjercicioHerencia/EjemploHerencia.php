<?php
require 'Coche.php';
$miCoche = new Coche();
$miCoche->repostar(10);
print_r($miCoche->estado());
echo "Litros en mi coche: " . $miCoche->litrosEnDeposito() . PHP_EOL;
$miCoche->setNumeroPasajeros(3);
echo "Pasajeros en mi coche: " . $miCoche->getNumeroPasajeros() . PHP_EOL;

$yo = new Persona();
$yo->setEdad(40);
echo "Tengo {$yo->getEdad()} años". PHP_EOL;

?>
