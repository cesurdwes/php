<?php

	$semana=array('Lunes','Martes');
	echo $semana[0]."<br>";
	$semana[2]='Miércoles';
	$semana[3]='Jueves';
	for ($i=0;$i<3;$i++){
		echo $semana[$i]."<br>";
	}
	echo "<br>";
	echo "FOREACH<br>";
	foreach ($semana as $dia) {
		echo $dia."<br>";
	}
	echo "<br>";
	sort($semana);
	echo "FOREACH - sort<br>";
	foreach ($semana as $dia) {
		echo $dia."<br>";
	}
	echo "<br>";
	rsort($semana);
	echo "FOREACH - rsort<br>";
	foreach ($semana as $dia) {
		echo $dia."<br>";
	}

	echo "<br>";

	$num=array(1,2,8,3,6);
	sort($num);
	foreach($num as $i){
		echo "<br>$i";
	}
	echo "<br>";

	$asoc=array("nombre" => "Alberto", "telefono" => "637373517", "email" => "alberto@jjj.com");

	echo $asoc["nombre"]."<br>";
	echo $asoc["telefono"]."<br>";
	echo $asoc["email"]."<br>";
	echo count($asoc);

	echo "<br>";

	asort($asoc);

	foreach($asoc as $elem){
		echo $elem."<br>";
	}

	$numeros=range(1,20);
	shuffle($numeros);
	foreach($numeros as $num){
		echo $num."<br>";
	}
	echo "<br><br>";
	print_r($numeros);

	echo "<br><br>";
	var_dump($numeros);
?>