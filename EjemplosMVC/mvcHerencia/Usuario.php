<?php
include "db.php";
/**
 *
 */
class Usuario extends db
{

  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }

  //Devolvemos todos los usuarios
  function devolverUsuarios(){
    //Construimos la consulta
    $sql="SELECT * from usuario";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=null){
      //Montamos la tabla de resultados
      $tabla=[];
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
}

 ?>
