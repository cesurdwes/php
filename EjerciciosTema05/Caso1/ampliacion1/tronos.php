<?php

	include 'thronesDB.php';
	class Tronos extends BBDD{

		function __construct(){
			parent::__construct();
		}

		    //Funcion para devolver el resumen
    public function devolverResumenSerie(){
        $sql = "SELECT * FROM titles";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado!=null){
	        $array=[];
	        while ($fila=$resultado->fetch_assoc()){
	        	$array[]=$fila;
	        }
        	return $array;
      	}else{
        	return null;
      }
    }

    //Funcion para devolver los actores por número de apariciones
    public function devolverListadoActores(){
        $sql = "SELECT * FROM cast ORDER BY episodes DESC";
        $resultado = $this->realizarConsulta($sql); 
        if ($resultado!=null){
        $array=[];
        while ($fila=$resultado->fetch_assoc()){
        	$array[]=$fila;
        }
        return $array;
      }
      else{
        return null;
      }
    }

    //Funcion para devolver los actores por número de apariciones
    public function devolverListadoActoresPorTemporada(){
        $sql = "SELECT * FROM season_ep";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado!=null){
        $array=[];
        while ($fila=$resultado->fetch_assoc()){
        	$array[]=$fila;
        }
        return $array;
      }
      else{
        return null;
      }
    }


    //Funcion para devolver los actores por episodio
    public function devolverListadoActoresPorEpisodio($episodio){
        $sql = "SELECT * FROM season_ep WHERE episode = '".$episodio."'";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado!=null){
        $array=[];
        while ($fila=$resultado->fetch_assoc()){
          $array[]=$fila;
        }
        return $array;
      }
      else{
        return null;
      }
    }
	}
?>