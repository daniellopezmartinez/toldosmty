<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Bienvenido</div>
				<div class="panel panel-body">
						<p>
							<img src="img/trm.png" height="185">
						</p>
					<form action=login.php id="formlg" method="POST">
						<label>Usuario</label>
						<input type="text" class="form-control input-sm" name="login"  placeholder="usuario">
						<label>Password</label>
						<input type="password" class="form-control input-sm" name="password"  placeholder="contraseña">
						<p></p>
						<input type="submit" value="Ingresar">
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html> <!--
