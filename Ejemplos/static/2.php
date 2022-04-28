<?php
class pi {
  public static $value=3.14159;

  public static function valor(){
    echo self::$value;
  }
}

class x extends pi {
  public function xStatic() {
    return self::$value;
  }
}

// Podemos obtener directamente el valor
echo x::$value;

// o bien mediante el método
$x = new x();
echo $x->xStatic()."<br>";
pi::valor();
?>