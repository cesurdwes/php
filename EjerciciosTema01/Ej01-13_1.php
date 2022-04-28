<?php
	$academia[0][0]=1;
	$academia[0][1]=14;
	$academia[0][2]=8;
	$academia[0][3]=3;
	$academia[1][0]=6;
	$academia[1][1]=19;
	$academia[1][2]=7;
	$academia[1][3]=2;
	$academia[2][0]=3;
	$academia[2][1]=13;
	$academia[2][2]=4;
	$academia[2][3]=1;

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
	echo '<h2>Versión con índices</h2>';
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