<?php
session_start();
$varsesion = $_SESSION['login'];
if($varsesion == null || $varsesion=''){
echo '<script> alert("Acceso No autorizado"); </script>';
echo '<script>javascript:window.history.back();</script>';
die();
}
?>
<?php require 'conexion.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Catalogo de Proveedores</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="img/logoico.ico">
  	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.4.1.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
   	</head>

<body>
<?php require 'menubr.php' ?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-9"> 
            <h2 class="display-7"> Catalago de Proveedores</h2>

				
				<table class="table table-striped table-hover">
  				<thead class="thead-dark">
    			<tr>
      			<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Contacto</th>
				<th scope="col">Calle</th>
				<th scope="col">Colonia</th>
				<th scope="col">Cargo</th>
				<th scope="col">Telefono</th>
				<th scope="col">Email</th>
				</tr>
		</thead>

			<?php 

				$sql="SELECT id_proveedor,nombre,apellido,contacto,colonia,calle,cargo,telefono,email
						from proveedor";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				
				
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>
</body>
</html>
