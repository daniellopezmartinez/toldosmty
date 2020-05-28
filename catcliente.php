<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Catalago Clientes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link rel="shortcut icon" href="img/logoico.ico">
		<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css">
		 <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peticion.js"></script>
	</head>
	<body>
		<?php require 'menubr.php' ?>
		<header>
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-12">
		            <h2 class="text-center"> Catalago de Clientes</h2>
								<br>
		        </div>
		    </div>
		</div>
		</header>

		<section>
			<div class="col-md-3">
			<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar...">
			<br>
		
		</div>
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA MORRILLO :V -->
		</section

	</body>
</html>
