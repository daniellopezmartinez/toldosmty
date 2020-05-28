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
 	<title>Registro Proveedor</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoico.ico">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
    $("document").ready(function(){
    $( "#id_tpago" ).load("assets/gettpago.php");
    $("#id_user").load("assets/getuser.php");
  })
</script>
 </head>

 <body>
 	<?php require 'menubr.php'?>

 <div class="container">
    <div class="row">
        <div class="col-md-7">
            <h2 class="display-7"> Agregar Proveedor</h2>
            <hr class="bg-info">
            <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
            <p class="text text-danger small pt-0 mt-0">*Todos los campos son obligatorios. </p>

             <form action="addprov.php" method="POST"/>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Nombre: </label>
                  <div class="col-lg-8">
                    <input type="text" name="nombre" value="" id="nombre" class="form-control">
                  </div>
              </div>

              <div class="row form-group">
                <label for="apellido" class="col-form-label col-md-4">Apellido Paterno: </label>
                  <div class="col-lg-8">
                    <input type="text" name="apellido" id="apellido" class="form-control">
                  </div>
              </div>

                <div class="row form-group">
                    <label for="apellidom" class="col-form-label col-md-4">Apellido Materno: </label>
                      <div class="col-lg-8">
                        <input type="text" name="apellidom" id="apellidom" class="form-control">
                      </div>
                </div>

                <div class="row form-group">
                  <label for="nombre" class="col-form-label col-md-4">Cargo: </label>
                <div class="col-lg-8">
                  <input type="text" name="cargo" id="cargo" class="form-control">
                </div>
              </div>

               <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Calle: </label>
                <div class="col-lg-8">
                  <input type="text" name="calle" id="calle" class="form-control">
                </div>
              </div>


                <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Colonia: </label>
                <div class="col-lg-8">
                  <input type="text" name="colonia" id="colonia" class="form-control">
                </div>
              </div>
<!-- Municipio Estado Pais -->
              <div class="row form-group">
              <label for="nombre" class="col-form-label col-md-4">Municipio: </label>
              <div class="col-lg-8">
                <input type="text" name="municipio" id="municipio" class="form-control">
              </div>
            </div>

            <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4">Estado: </label>
            <div class="col-lg-8">
              <input type="text" name="estado" id="estado" class="form-control">
            </div>
          </div>

          <div class="row form-group">
          <label for="nombre" class="col-form-label col-md-4">Pais</label>
          <div class="col-lg-8">
            <input type="text" name="pais" id="pais" class="form-control">
          </div>
        </div>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Entre calle: </label>
                <div class="col-lg-8">
                  <textarea rows="2" class="form-control" id="entrecalle" name="entrecalle"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Referencia: </label>
                <div class="col-lg-8">
                  <textarea rows="2" class="form-control" id="referencia" name="referencia"></textarea>
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Contacto:</label>
                  <input type="text" class="form-control" id="contacto" name="contacto" >
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Telefono:</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Usuario:</label>
                  <select id="id_user" name="id_user" class="form-control"></select>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Tipo de Pago:</label>
                  <select id="id_tpago" name="id_tpago" class="form-control"></select>
                </div>
              </div>

                <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity">Email:</label>
                  <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">RFC:</label>
                    <input type="text" class="form-control" name="erfc" id="erfc">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Codigo Postal:</label>
                  <input type="text" class="form-control" id="codigo_postal" name="codigo_postal">
                </div>
              </div>
                <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Notas: </label>
                <div class="col-lg-8">
                  <textarea rows="2" class="form-control" id="notas" name="notas"></textarea>
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
