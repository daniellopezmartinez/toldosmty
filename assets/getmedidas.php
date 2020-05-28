
<?php
	$idcategoria= $_GET['param_id'];
	$usuario = "root";
	$contrasena = "";
	$servidor = "localhost";
	$basededatos = "toldosmty";

	$conexion = mysqli_connect( $servidor,$usuario,$contrasena,$basededatos) or die ("No se ha podido conectar al servidor de la base de datos");

	$result=mysqli_query($conexion,"SELECT * FROM medida WHERE id_categoria = $idcategoria ");


	while($row = mysqli_fetch_array ($result))
		  echo '<option value="'.$row['id_medida'].'">'.$row['medida'].'</option>';


  ?>
