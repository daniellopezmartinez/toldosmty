
<?php
	$id_proveedor= $_GET['param_id'];
	$usuario = "root";
	$contrasena = "";
	$servidor = "localhost";
	$basededatos = "toldosmty";
	
	$conexion = mysqli_connect( $servidor,$usuario,$contrasena,$basededatos) or die ("No se ha podido conectar al servidor de la base de datos");
	
	$result=mysqli_query($conexion,"SELECT * FROM proveedor WHERE id_proveedor = $id_proveedor");

	while($row = mysqli_fetch_array ($result))
		  echo '<option value="'.$row['id_proveedor'].'">'.$row['notas'].'</option>';


  ?>

