<?php
// Clase padre
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Clases hija
class Audi extends Car {
  public function intro() : string {
    return "Ha elegido la calidad alemana Soy un $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Encantado de ser sueco! Soy un $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "Extravagancia francesa! Soy un $this->name!";
  }
}

// Creamos objetos de las clases hija
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>