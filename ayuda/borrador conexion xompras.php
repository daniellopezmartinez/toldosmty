 valorestablacompras ("INSERT INTO compras (id_producto,id_proveedor,id_user,id_tpago,id_categoria,precio,fecha) VALUES ('$id_producto','$id_proveedor','$id_user','$id_tpago','$id_categoria','$precio')";


 <!-- 
/* 
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "toldosmty";

    
    $id_proveedor=$_POST['id_proveedor'];
    $id_notas=$_POST['id_notas'];
    $id_user=$_POST['id_user'];
    $id_estado=$_POST['id_estado'];
    $id_producto=$_POST['id_producto'];
    $id_color=$_POST['id_color'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $codigo=$_POST['codigo'];
    $costo=$_POST['notas'];
   

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection fallida: " . $conn->connect_error);
} 



  $sql="INSERT INTO almacen
  (id_user,id_producto,id_medida,id_proveedor,id_categoria,id_estado,id_color,notas,cantidad,precio) 
  VALUES
   ('$id_user','$id_producto','$id_medida','$id_proveedor','$id_categoria','$id_estado','$id_color','$notas','$cantidad','$precio')";

if ($conn->query($sql) === TRUE) {
    $insertar=$conn->query("INSERT INTO compras }(id_producto,id_proveedor,id_user,id_tpago,id_categoria,precio,fecha) VALUES ('$id_producto','$id_proveedor','$id_user','$id_tpago','$id_categoria','$precio')";

    echo "<script language='JavaScript'>";
    echo "location = '/tlmty/compra.php'";
    echo "</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
*/