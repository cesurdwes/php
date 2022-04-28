<?php
	$academia[0] = array("1","14","8","3");
	$academia[1] = array("6","19","7","2");
	$academia[2] = array("3","13","4","1");
	$basico=0;
	$medio=0;
	$perfeccionamiento=0;
	for($i=0;$i<=3;$i++){
		$basico+=$academia[0][$i];
		$medio+=$academia[1][$i];
		$perfeccionamiento+=$academia[2][$i];
	}
	$ingles=0;
	$frances=0;
	$aleman=0;
	$ruso=0;
	for($i=0;$i<=2;$i++){
		$ingles+=$academia[$i][0];
		$frances+=$academia[$i][1];
		$aleman+=$academia[$i][2];
		$ruso+=$academia[$i][3];
	}
	echo '<h2>Versión con arrays e índices</h2>';
	echo 'NIVELES<br>';
	echo 'Total de alumnos en nivel básico: '.$basico."<br>";
	echo 'Total de alumnos en nivel medio: '.$medio."<br>";
	echo 'Total de alumnos en nivel perfeccionamiento: '.$perfeccionamiento."<br>";
	echo '<br>IDIOMAS<br>';
	echo 'Alumnos en inglés: '.$ingles."<br>";
	echo 'Alumnos en francés: '.$frances."<br>";
	echo 'Alumnos en alemán: '.$aleman."<br>";
	echo 'Alumnos en ruso: '.$ruso."<br>";
?>