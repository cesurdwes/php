<?php
	include 'db.php';

	class Jugador extends BBDD{

		function __construct(){
			parent::__construct();
		}

		 //Funcion para devolver los equipos
    public function devolverEquipos(){
        $sql="SELECT Nombre FROM equipos ORDER BY Nombre ASC";
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

    //Función para devolver los partidos por equipo. Se contempla tanto de equipo local como visitante
    public function devolverPartidosPorEquipo($equipo){
      $sql="SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, temporada FROM partidos
            WHERE equipo_local='".$equipo."' OR equipo_visitante ='".$equipo."' ORDER BY temporada ASC";
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

    //Función para devolver los jugadores por equipo
    public function devolverJugadoresPorEquipo($equipo){
      $sql="SELECT Nombre, Procedencia, Altura, Peso, Posicion FROM jugadores 
             WHERE Nombre_equipo='".$equipo."' ORDER BY Nombre ASC";
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

    //Función que obtiene el número de temporadas
    public function getTemporadas(){
      //Array
      $array_temporadas = [];
      $sql="SELECT DISTINCT temporada FROM estadisticas ORDER BY temporada";
      $temporadas = $this->realizarConsulta($sql);
      if ($temporadas!=null){
        while ($temp=$temporadas->fetch_assoc()) {
          $array_temporadas[] = $temp['temporada'];
        }
        return $array_temporadas;
      } else{
        return null;
      }
    }

    //Función para devolver los máximos anotadores por temporada
    public function devolverMaximosAnotadores(){

      //Arrays
      $array_anotadores = [];
      $array_temporadas = $this->getTemporadas();
      //Obtenemos primero las temporadas
      if ($array_temporadas!=null){
      for ($i=0; $i < count($array_temporadas); $i++) {
        $sql="SELECT MAX(e.Puntos_por_partido) AS puntuacion,j.nombre, j.Nombre_equipo
              FROM estadisticas e, jugadores j WHERE e.temporada ='".$array_temporadas[$i]."' AND e.jugador = j.codigo GROUP BY jugador ORDER BY puntuacion DESC LIMIT 1";
        $anotador_por_temporada = $this->realizarConsulta($sql);
        if($anotador_por_temporada!=null){  
          if($anotador_por_temporada->num_rows>0){
            $anotador = $anotador_por_temporada->fetch_assoc();
              $array_anotadores[] = [$anotador['puntuacion'],$anotador['nombre'], $anotador['Nombre_equipo'], $array_temporadas[$i]];
              }
          }
        }
          return $array_anotadores;
      }
      else{
        return null;
      }
    }

    //Función para devolver los máximos asistentes por temporada
    public function devolverMaximosAsistentes(){

      //Arrays
      $array_temporadas = $this->getTemporadas();
      $array_asistentes = [];

      //Obtenemos primero las temporadas
      if ($array_temporadas!=null){
      for ($i=0; $i < count($array_temporadas); $i++) {
        $sql="SELECT MAX(e.Asistencias_por_partido) AS asistencias,j.nombre, j.Nombre_equipo
              FROM estadisticas e, jugadores j WHERE e.temporada ='".$array_temporadas[$i]."' AND e.jugador = j.codigo GROUP BY jugador ORDER BY asistencias DESC LIMIT 1";
            $asistente_por_temporada = $this->realizarConsulta($sql);
              if($asistente_por_temporada!=null){
                $asistente = $asistente_por_temporada->fetch_assoc();
                $array_asistentes[] = [$asistente['asistencias'],
                  $asistente['nombre'],
                    $asistente['Nombre_equipo'],
                      $array_temporadas[$i]];
              }
          }

          return $array_asistentes;
      }
      else{
        return null;
      }
    }
	}