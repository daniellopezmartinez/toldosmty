<?php
include("conexion.php");

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
$rfc			=$_POST['rfc'];
$codigo_postal=$_POST['codigo_postal'];
$id_tpago	=$_POST['id_tpago'];
#Poner Comillas


$solicitud = "UPDATE clientes SET nombre='$nombre', apellido='$apellido', apellidom='$apellidom', calle='$calle', colonia='$colonia', municipio='$municipio',
 estado='$estado', pais='$pais', entrecalle='$entrecalle', referencia='$referencia',email='$email',telefono='$rtelefono,rfc='$rfc'
 codigo_postal='$codigo_postal',id_tpago='$id_tpago'  WHERE id=$id";

$resultado=mysqli_query ($conexion,$solicitud);

header("location:inicio.php")
?>
