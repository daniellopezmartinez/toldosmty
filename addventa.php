<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toldosmty";

$conexion=mysqli_connect($servername,$username,$password,$dbname);
  	
  	$id_cliente=$_POST['id_cliente'];
    $id_apellido=$_POST['id_apellido'];
    $id_user=$_POST['id_user'];
    $id_producto=$_POST['id_producto'];
  	$id_color=$_POST['id_color'];
    $cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];
    $codigo=$_POST['codigo'];
    $notas=$_POST['notas'];
    $id_categoria=$_POST['id_categoria'];
    $id_medida=$_POST['id_medida'];

   
   $sqlalmacen="INSERT INTO almacen
  (id_user,id_producto,id_medida,id_proveedor,id_categoria,id_estado,id_color,notas,cantidad,costo) 
  VALUES
  ('$id_user','$id_producto','id_medida','$id_proveedor','$id_categoria','$id_estado','$id_color','$notas','$cantidad','$precio')";

   $ejecutar=mysqli_query($conexion,$sqlalmacen);

   if($ejecutar==1){

    $sqlalmacen1="INSERT INTO ventas (id_cliente,id_proveedor,id_user,id_medida,id_categoria,precio) 
                              VALUES ('$id_producto','$id_proveedor','$id_user','$id_medida','$id_categoria',$precio')";

    $ejecutar2=mysqli_query($conexion,$sqlalmacen1);
    echo "exitosa captura";
   }else{

    echo "no se ejecuto ";
   }



?>
