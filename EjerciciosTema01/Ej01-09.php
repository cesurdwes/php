<?php
	$indice=0;
	$numero=0;
	while ($indice<10){
		if ($numero%2==0){
			$vector[$indice]=$numero;
			$indice++;
		}
		$numero++;
	}

	for($i=0;$i<10;$i++){
		echo 'vector['.$i."] = ".$vector[$i]."<br>";
	}

?>