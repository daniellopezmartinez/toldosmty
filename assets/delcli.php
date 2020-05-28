<?php
include("conexion.php");
$id_cliente=$_GET['id'];
$solicitud="DELETE FROM clientes WHERE id_cliente=$id_cliente";
$resultado=mysqli_query($conexion,$solicitud);

header("location:../catcliente.php");
 ?>
