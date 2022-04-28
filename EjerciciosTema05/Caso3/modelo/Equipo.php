<?php
  class Equipo {

    // private $id_equipo;
    private $nombre_equipo;
    private $ciudad_equipo;
    private $conferencia_equipo;
    private $division_equipo;

    public function getNombre(){
      return $this->nombre_equipo;
    }

    public function setNombre($nombre){
      $this->nombre_equipo = $nombre;
    }

    public function getCiudad(){
      return $this->ciudad_equipo;
    }

    public function setCiudad($ciudad){
      $this->ciudad_equipo = $ciudad;
    }

    public function getConferencia(){
      return $this->conferencia_equipo;
    }

    public function setConferencia($conferencia){
      $this->conferencia_equipo = $conferencia;
    }

    public function getDivision(){
      return $this->division_equipo;
    }

    public function setDivision($division){
      $this->division_equipo = $division;
    }
  }
 ?>
