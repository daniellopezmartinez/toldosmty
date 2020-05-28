<?php
	$usuario = "root";
	$contrasena = "";
	$servidor = "localhost";
	$basededatos = "toldosmty";
	//Crear una conexion con el servidor de base da datos con mysqli_connect()
	$conexion = mysqli_connect( $servidor,$usuario,$contrasena,$basededatos) or die ("No se ha podido conectar al servidor de la base de datos");
	$conexion->set_charset('utf8');
	return $conexion;
?>


