<?php
session_start();
$varsesion = $_SESSION['login'];
if($varsesion == null || $varsesion=''){
echo '<script> alert("Acceso No autorizado"); </script>';
echo '<script>javascript:window.history.back();</script>';
die();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<link rel="shortcut icon" href="img/logoico.ico">
</head>
<body>
<?php require 'menubr.php' ?>
<br>
<br>
<br>
<div class="card border-white text-white bg-dark">
   <center>  
    <img class="mx-auto d-block" src="img/trm.png" alt="Card image cap" align="center">
    <div class="card-body">        
    </div>
    </div>
    </center>


</body>
</html>
