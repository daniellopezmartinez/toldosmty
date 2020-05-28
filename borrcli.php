<!DOCTYPE html>
<html>
<head>
	<title>Modificar / Borrar Cliente </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="img/logoico.ico">
  	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.4.1.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
<body>
<?php require 'menubr.php' ?>
<h2>Modificar / Borrar Cliente</h2>
<?php
include("conexion.php");
  $solicitud="SELECT * FROM clientes";
	$resultado=mysqli_query($conexion,$solicitud);
	 echo "<center> <table class='table table-condensed table-striped'>
	 <thead class='thead-dark'>
	  <tr>
		<th scope='col'>Id.Cliente</th>
	  <th scope='col'>Nombre</th>
	  <th scope='col'>Apellido</th>
	  <th scope='col'>Direccion</th>
	  <th scope='col'>Email</th>
	  <th scope='col'>Telefono</th>
	  <th scope='col' colspan='2'>Acciones</th>
	  <tr>
		</thead>";

	while($fila=mysqli_fetch_array($resultado) )
	{
		echo "<tbody>";
		echo "<tr>";
		echo "<td>" . $fila['id_cliente']. "</td>";
		echo "<td>" . $fila['nombre']. "</td>";
		echo "<td>" . $fila['apellido']. "</td>";
		echo "<td>" . $fila['calle']. "</td>";
		echo "<td>" . $fila['email']. "</td>";
		echo "<td>" . $fila['telefono']. "</td>";
		echo "<td><a href='assets/update_cliente.php?id=".$fila['id_cliente']."'>Modificar</a></td>";
		echo "<td><a href='assets/delcli.php?id=".$fila['id_cliente']."'>Eliminar</a></td>";
		echo "</tr>";
		echo "</thead>";
		echo "</tbody>";

	}


  ?>
</center>
<br><br>
</body>
</html>
