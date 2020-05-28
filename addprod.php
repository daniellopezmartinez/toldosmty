<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toldosmty";

  	
  	$id_categoria=$_POST['id_categoria'];
    $id_estado=$_POST['id_estado'];
    $id_medida=$_POST['id_medida'];
    $id_user=$_POST['id_user'];
    $id_color=$_POST['id_color'];
  	$nombre=$_POST['nombre'];
	  $codigo=$_POST['codigo'];
    $precio=$_POST['precio'];
    $costo=$_POST['costo'];
   

  	$conn = new mysqli($servername, $username, $password, $dbname);

  	if ($conn->connect_error) {
    die("Connection fallida: " . $conn->connect_error);
} 



	$sql="INSERT INTO productos (id_categoria,id_estado,id_medida,id_user,id_color,nombre,codigo,precio,costo) VALUES ('$id_categoria','$id_estado','$id_medida','$id_user','$id_color','$nombre','$codigo','$precio','$costo')";

if ($conn->query($sql) === TRUE) {
    echo "<script language='JavaScript'>";
    echo "location = '/tlmty/inventario.php'";
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
