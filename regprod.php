<?php
session_start();
$varsesion = $_SESSION['login'];
if($varsesion == null || $varsesion=''){
  echo '<script> alert("Acceso No autorizado"); </script>';
  echo '<script>javascript:window.history.back();</script>';
  die();
  }
?>
<?php
require ('conexion.php');
?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Registro de Productos</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="img/logoico.ico">
   <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
   <script src="librerias/bootstrap/js/bootstrap.js"></script>
   <script src="librerias/jquery-3.4.1.min.js"></script>
   <script type="text/javascript">
       $("document").ready(function(){
       $("#id_categoria").load("assets/getcategorias.php");
       $("#id_estado" ).load("assets/getstatus.php");
       $("#id_user").load("assets/getuser.php");
       $("#id_color").load("assets/getcolor.php");

      $("#id_categoria").change(function(){
            var id= $("#id_categoria").val();
            $.get("assets/getmedidas.php",{param_id:id})
            .done(function(data){
            $("#id_medida").html(data);
        
      })
    })
  })
</script>
</head>
<script type="text/javascript">
  function Confirm()
  {
    var respuesta = confirm("Desas Agregar Producto");

    if (respuesta == true)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

</script>

 <body>
<?php require 'menubr.php'?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-12"> 
            <h2 class="display-7"> Agregar Producto</h2>
            <hr class="bg-info">
            <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
            <p class="text text-danger small pt-0 mt-0">*Todos los campos son obligatorios. </p> 

<form action="addprod.php" method="POST"/>


    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Nombre del Producto</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Categoria:</label>
          <select id="id_categoria" name="id_categoria" class="form-control"></select>
        </div>
         <div class="form-group col-md-2">
          <label for="inputZip">Medida:</label>
          <select id="id_medida" name="id_medida" class="form-control"></select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Status:</label>
          <select id="id_estado" name="id_estado" class="form-control"></select>
        </div>
        
         <div class="form-group col-md-2">
          <label for="inputZip">Usuario:</label>
          <select id="id_user" name="id_user" class="form-control"></select>
          </div>
          <div class="form-group col-md-4">
          <label for="inputZip">Color:</label>
          <select id="id_color" name="id_color" class="form-control"></select>
          </div>
    </div>    
              
              <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Codigo:</label>
            <input type="text" id="codigo" name="codigo" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-2">
          <label for="inputState">Precio:</label>
          <input type="text" name="precio" value="" id="precio" class="form-control">
        </div>
         <div class="form-group col-md-2">
          <label for="inputZip">Costo:</label>
          <input type="text" name="costo" value="" id="costo" class="form-control">
        </div>
    </div>
<button type="submit" class="btn btn-info" style="margin:10px" onclick="return Confirm()">Registrar</button>
              <button type="reset" class="btn btn-danger" style="margin:10px">Limpiar Datos</button>

</form>

        </div>
    </div>
</div>
</body>
</html>
 
