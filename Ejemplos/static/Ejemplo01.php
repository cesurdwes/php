<?php
class greeting {
  public static function welcome() {
    echo "Hola mundo cruel!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

$miclase = new SomeOtherClass();
$miclase->message();
?>