<?php

$ejemplo = array('Equipo 1' => array ('nombre' => 'Unicaja', 'numJugadores'=>24, 'posicion'=>3),
	'Equipo 2' => array ('nombre' => 'Real Madrid', 'numJugadores'=>29, 'posicion'=>1)
 );
echo 'Equipo: '.$ejemplo['Equipo 1']['nombre'].'<br>';
echo 'Nº jugadores. '.$ejemplo['Equipo 1']['numJugadores'].'<br>';
echo 'Posición: '.$ejemplo['Equipo 1']['posicion'].'<br>';
echo '<br>';
echo 'Equipo: '.$ejemplo['Equipo 2']['nombre'].'<br>';
echo 'Nº jugadores. '.$ejemplo['Equipo 2']['numJugadores'].'<br>';
echo 'Posición: '.$ejemplo['Equipo 2']['posicion'].'<br>';
?>