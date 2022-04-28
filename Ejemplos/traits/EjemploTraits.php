<?php
trait message1 {
public function msg1() {
    echo "La POO es divertida! ";
  }
}

trait message2 {
public function msg2() {
    echo "La POO es un rollo! ";
  }
}

class Welcome {
  use message1;
}

class Welcome2{
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
$obj2 = new Welcome2();
$obj2->msg2();
$obj2->msg1();
?>