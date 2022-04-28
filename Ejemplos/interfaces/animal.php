<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Miau";
  }
}
class Dog implements Animal {
  public function makeSound() {
    echo " Guau ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Cuic ";
  }
}

// Creamos una lista de animales
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Decimos a los animales que hagan ruido...
foreach($animals as $animal) {
  $animal->makeSound();
}
?>
