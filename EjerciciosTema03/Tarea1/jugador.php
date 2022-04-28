<?php
    
class jugador {
	private $numeroJug;
	private $ptos;
	function __construct($numeroJug)
	{​​​​​
		$this -> numeroJug = $numeroJug;
	}​​​​​
	public function getnumeroJug(){​​​​​
		return $this -> numeroJug;
	}​​​​​
	public function getPtos(){​​​​​
		return $this -> ptos;
	}​​​​​
	public function addPtos($ptos){​​​​​}​​​​​
	{​​​​​
		if ($ptos>0) {​​​​​
		 	$this -> ptos += $ptos;
		}​​​​​
	}​​
 }​​​​​



?>