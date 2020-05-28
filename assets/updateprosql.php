<?php
include("connect_tract.php");

$marca =$_POST['marca'];
$modelo	=$_POST['modelo'];
$year =$_POST['year'];
$serie =$_POST['serie'];
$motor =$_POST['motor'];
$eco=$_POST['eco'];
$capaciadad=$_POST['capacidad'];
$placa=$_POST['placa'];
$compania=$_POST['compania'];
$npoliza=$_POST['npoliza'];
$id=$_POST['id'];
#Poner Comillas


$solicitud = "UPDATE tractores SET marca='$marca', modelo='$modelo', year='$year', serie='$serie', motor='$motor', eco='$eco', capacidad='$capacidad', placa='$placa', compania='$compania', npoliza='$npoliza'  WHERE id=$id";

$resultado=mysqli_query ($conexion,$solicitud);

header("location:show_tractores.php")
?>
