<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toldosmty";


  	$id_tpago=$_POST['id_tpago'];
  	$id_user=$_POST['id_user'];
  	$nombre=$_POST['nombre'];
	  $cargo=$_POST['cargo'];
	  $contacto=$_POST['contacto'];
  	$apellido=$_POST['apellido'];
		$apellidom=$_POST['apellidom'];
    $colonia=$_POST['colonia'];
		$municipio=$_POST['municipio'];
		$estado=$_POST['estado'];
		$pais=$_POST['pais'];
  	$calle=$_POST['calle'];
  	$codigo_postal=$_POST['codigo_postal'];
  	$entrecalle=$_POST['entrecalle'];
  	$referencia=$_POST['referencia'];
  	$email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $erfc=$_POST['erfc'];
    $notas=$_POST['notas'];

  	$conn = new mysqli($servername, $username, $password, $dbname);

  	if ($conn->connect_error) {
    die("Connection fallida: " . $conn->connect_error);
}



	$sql="INSERT INTO proveedor (id_tpago,id_user,nombre,cargo,contacto,apellido,apellidom,colonia,municipio,estado,pais,calle,codigo_postal,entrecalle,referencia,email,telefono,rfc,notas)
	VALUES
	('$id_tpago','$id_user','$nombre','$cargo','$contacto','$apellido','$apellidom','$colonia','$municipio','$estado','$pais','$calle','$codigo_postal','$entrecalle','$referencia','$email','$telefono','$erfc','$notas')";

if ($conn->query($sql) === TRUE) {
    echo "<script language='JavaScript'>";
    echo "location = '/tlmty/catprov.php'";
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
