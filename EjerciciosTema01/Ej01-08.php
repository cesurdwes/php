<?php
	$tablas=1;
	echo '<table border="1">';
	while ($tablas<=10){
		echo '<tr>';
		echo '<th>Tabla del '.$tablas.'</th>';
		$numero=1;
		while ($numero<=10){
			echo '<td>'.$tablas.' x '.$numero." = ".($numero*$tablas).'</td>';
			$numero++;
		}
		echo '</tr>';
		$tablas++;
	}
	echo '</table>';
?>