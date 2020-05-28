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
 	<title>Registro </title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoico.ico">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
    $("document").ready(function(){
    $("#id_user").load("assets/getuser.php");
  })
</script>
 </head>

 <body>
 	<?php require 'menubr.php'?>
 
 <div class="container">
    <div class="row"> 
        <div class="col-md-7"> 
            <h2 class="display-7"> Agregar Empleado</h2>
            <hr class="bg-info">
            <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
            <p class="text text-danger small pt-0 mt-0">*Todos los campos son obligatorios. Excepto Fecha de Egreso </p> 
            
             <form action="addemployee.php" method="POST"/>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Nombre: </label>
                <div class="col-lg-8">
                  <input type="text" name="nombre" value="" id="nombre" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Apellido Paterno: </label>
                <div class="col-lg-8">
                  <input type="text" name="apellido" id="apellido" class="form-control">
                </div>
                </div>
                 <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Apellido Materno: </label>
                <div class="col-lg-8">
                  <input type="text" name="apellido" id="apellido" class="form-control">
                </div>
                </div>
                <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Puesto: </label>
                <div class="col-lg-8">
                  <input type="text" name="cargo" id="cargo" class="form-control">
                </div>
              </div>
                <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Calle y Numero: </label>
                <div class="col-lg-8">
                  <input type="text" name="direccion" id="calle" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Entre calle: </label>
                <div class="col-lg-8">
                  <textarea rows="2" class="form-control" id="entrecalle" name="entrecalle"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Colonia: </label>
                <div class="col-lg-8">
                  <input type="text" name="colonia" id="calle" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Municipio: </label>
                <div class="col-lg-8">
                  <input type="text" name="municipio" id="calle" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Estado: </label>
                <div class="col-lg-8">
                  <input type="text" name="estado" id="calle" class="form-control">
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Email:</label>
                  <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-3">
                 <label for="inputState">Estado Civil:</label>
                     <select id="id_tpago" name="email" class="form-control">
                    	<option value="soltero">Soltero</option>
                    	<option value="casado">Casado</option>
                    	<option value="divorciado">Divorciado</option>
                    	<option value="unionlibre">Union Libre</option>
                    	<option value="otro">Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Usuario:</label>
                  <select id="id_user" name="id_user" class="form-control"></select>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Codigo Postal:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
              </div>
              
               <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputState">Telefono:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Numero Infonavit:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Numero de Seg. Social:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
              </div>



                <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" name="email" id="email">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Fecha Ingreso</label>
                   <input type="date" class="form-control" name="email" id="email">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Fecha Egreso</label>
                  <input type="date" class="form-control" name="email" id="email">
                </div>
              </div>

               <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputState">Sueldo Diario:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Sueldo Inicial</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Sueldo Final:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
              </div>

               <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Talla Pantalon:</label>
                  <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-3">
                 <label for="inputState">Talla Camisa:</label>
                     <select id="id_tpago" name="email" class="form-control">
                    	<option value="soltero">Chica</option>
                    	<option value="casado">Mediana</option>
                    	<option value="divorciado">Grande</option>
                    	<option value="unionlibre">Extra Grande</option>
                    	</select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Gorra:</label>
                  <select id="id_user" name="id_user" class="form-control"></select>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Calzado:</label>
                   <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
              </div>
              <button type="submit" class="btn btn-info">Registrar</button>
              <button type="reset" class="btn btn-danger">Borrar Datos</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>


        </div>
    </div>
</div>

 </body>
 </html>

 