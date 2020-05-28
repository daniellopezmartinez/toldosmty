<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Buscador en Tiempo Real con AJAX</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link rel="shortcut icon" href="img/logoico.ico">
		<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css">
		 <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peps.js"></script>
	</head>
	<body>
		<?php require 'menubr.php' ?>
		<header>
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-12">
		            <h2 class="display-7"> Catalago de Proveedor</h2>
		        </div>
		    </div>
		</div>
		</header>

		<section>
			<label> Busqueda..
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA MORRILLO :V -->
		</section

	</body>
</html>
