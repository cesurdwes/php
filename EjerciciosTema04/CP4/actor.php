<?php

class actor{
	private $actor_id;
	private $first_name;
	private $last_name;

	public function __construct($id, $first, $last){
		$this->actor_id=$id;
		$this->first_name=$first;
		$this->last_name=$last;
	}

	public function getActorId(){
		return $this->actor_id;
	}

	public function getFirstName(){
		return $this->first_name;
	}

	public function getLastName(){
		return $this->last_name;
	}
}


?>

