<?php
	$amigos=array("Juan"=> ["altura" => 175, "pelo" => "rubio", "ojos" => "azules"],
				"Maria" => ["altura" => 168, "pelo" => "castaño", "ojos" => "marrones" ],
				"Pedro" => ["altura" => 180, "pelo" => "castaño", "ojos" => "verdes"]);

	echo "Altura de Juan: ".$amigos["Juan"]["altura"].'<br>';
	echo "Ojos de María: ".$amigos["Maria"]["ojos"].'<br>';
	echo "Pelo de Pedro: ".$amigos["Pedro"]["pelo"].'<br>'; 
?>