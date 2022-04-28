<?php
/*En este caso añadimos una función de validación
que devolvera un mensaje en caso de enviar el
campo vacio. No devolvera error de formato, ya que
el pattern del formulario, solo permite el envio
si la información es correcta.*/
  if(isset($_POST["hex"])&&!empty($_POST["hex"])){

  $R=hexdec(substr($_POST["hex"], 1, 2));

  $G=hexdec(substr($_POST["hex"], 3, 2));

  $B=hexdec(substr($_POST["hex"], -2));

  echo "RGB(" . $R . ", " . $G . ", " . $B . ")";

}else {
  echo "El valor introducido no es válido, <br>";
  echo "recargue la página y vuelva a intentarlo.";
}
?>
