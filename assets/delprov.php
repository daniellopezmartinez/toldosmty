<?php
include("conexion.php");
$id_proveedor=$_GET['id'];
$solicitud="DELETE FROM proveedor WHERE id_proveedor=$id_proveedor";
$resultado=mysqli_query($conexion,$solicitud);

header("location:../catprov.php");
 ?>
