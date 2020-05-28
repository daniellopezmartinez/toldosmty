<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toldosmty";

	$nombre		=$_POST['nombre'];
	$apellido	=$_POST['apellido'];
	$apellidom=$_POST['apellidom'];
  $calle		=$_POST['calle'];
	$colonia	=$_POST['colonia'];
	$municipio=$_POST['municipio'];
	$estado		=$_POST['estado'];
	$pais			=$_POST['pais'];
	$entrecalle=$_POST['entrecalle'];
	$referencia=$_POST['referencia'];
  $email		=$_POST['email'];
  $telefono	=$_POST['telefono'];
  $id_user	=$_POST['id_user'];
  $rfc			=$_POST['rfc'];
  $codigo_postal=$_POST['codigo_postal'];
  $id_tpago	=$_POST['id_tpago'];


  	$conn = new mysqli($servername, $username, $password, $dbname);

  	if ($conn->connect_error) {
    die("Connection fallida: " . $conn->connect_error);
}



	$sql="INSERT INTO clientes (id_user,id_tpago,nombre,apellido,apellidom,calle,colonia,municipio,estado,pais,codigo_postal,entrecalle,referencia,email,telefono,rfc)
	VALUES 								('$id_user','$id_tpago','$nombre','$apellido','$apellidom','$calle','$colonia','$municipio','$estado','$pais','$codigo_postal','$entrecalle','$referencia','$email','$telefono','$rfc')";

if ($conn->query($sql) === TRUE) {
    echo "<script language='JavaScript'>";
    echo "location = '/tlmty/catcliente.php'";
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
