<?php
	require 'equipo.php';
	$equipo1 = new Equipo();
	$equipo2 = new Equipo();
	$equipo1->mostrarEquipo();
	echo $equipo1->getPosicion().'<br><br>';
	//$equipo1->nombre='UNCBasket';
	//$equipo2->nombre='RMDBasket';
	$equipo1->ponerEquipo('UNCBasket');
	$equipo2->ponerEquipo('RMDBasket');
	$equipo1->mostrarEquipo();
	$equipo2->mostrarEquipo();
	$equipo1->setPosicion('1º');
	$equipo2->setPosicion('2º');
	echo 'Posición equipo1: '.$equipo1->getPosicion().'<br>';
	echo 'Posición equipo2: '.$equipo2->getPosicion().'<br>';
?>