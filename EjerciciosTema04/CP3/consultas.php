<?php
	/*Este archivo contiene todas las consultas, así como las variables
	generales, para poder llamarlas cómodamente desde el resto de páginas*/
	$gastos1=0;
	$gastos2=0;
	$ventas1=0;
	$ventas2=0;
	//Realizamos la conexión
	$conexion = new mysqli("localhost", "root", "", "beneficios",3307);
	/*Realizamos la consulta, y mediante el bucle for, almacenamos
	todos los gastos de la semana 1 en la variable $gastos1*/
	$resultado=$conexion->query("SELECT gasto FROM gastos WHERE num_semana=1");
	for ($i=0; $i < $resultado->num_rows ; $i++) {
	  $fila=$resultado->fetch_assoc();
	  $gastos1+=$fila["gasto"];
	}
	/*Realizamos la consulta, y mediante el bucle for, almacenamos
	todas las ventas de la semana 1 en la variable $ventas1*/
	$resultado=$conexion->query("SELECT venta FROM ventas WHERE num_semana=1");
	for ($i=0; $i < $resultado->num_rows ; $i++) {
	  $fila=$resultado->fetch_assoc();
	  $ventas1+=$fila["venta"];
	}
	/*Realizamos la consulta, y mediante el bucle for, almacenamos
	todos los gastos de la semana 2 en la variable $gastos2*/
	$resultado=$conexion->query("SELECT gasto FROM gastos WHERE num_semana=2");
	for ($i=0; $i < $resultado->num_rows ; $i++) {
	  $fila=$resultado->fetch_assoc();
	  $gastos2+=$fila["gasto"];
	}
	/*Realizamos la consulta, y mediante el bucle for, almacenamos
	todas las ventas de la semana 2 en la variable $ventas2*/
	$resultado=$conexion->query("SELECT venta FROM ventas WHERE num_semana=2");
	for ($i=0; $i < $resultado->num_rows ; $i++) {
	  $fila=$resultado->fetch_assoc();
	  $ventas2+=$fila["venta"];
	}
	/*Calculamos el beneficio de la semana 1 y 2, y lo almacenamos en sus
	respectivas variables*/
	$beneficio1=$ventas1-$gastos1;
	$beneficio2=$ventas2-$gastos2;
?>
