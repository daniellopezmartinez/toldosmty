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
 <title>Compras</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="img/logoico.ico">
   <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
   <script src="librerias/bootstrap/js/bootstrap.js"></script>
   <script src="librerias/jquery-3.4.1.min.js"></script>
   <script type="text/javascript">
    $("document").ready(function(){
      $("#id_proveedor").load("assets/getprovname.php");
      $("#id_notas" ).load("assets/getprovnotas.php");
      $("#id_user").load("assets/getuser.php");
      $("#id_color").load("assets/getcolor.php");
      $("#id_estado").load("assets/getstatus.php");
      $("#id_producto").load("assets/getproductos.php");
      $("#id_categoria").load("assets/getcategorias.php");
      $("#id_medida").load("assets/getmedida.php");


      $("#id_proveedor").change(function(){
            var id= $("#id_proveedor").val();
            $.get("assets/getprovnotas.php",{param_id:id})
            .done(function(data){
            $("#id_notas").html(data);
        
      })
    })
  })
</script>
</head>
 <body>
<?php require 'menubr.php'?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-12"> 
            <h2 class="display-7"> Compra de Producto</h2>
            <hr class="bg-info">
            <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
            
 <form action="addalmacen.php" method="POST"/>


    <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCity">Nombre del Proveedor</label>
           <select id="id_proveedor" name="id_proveedor" class="form-control"></select>
        </div>
        <div class="form-group col-md-5">
          <label for="inputState">Referencia proveedor:</label>
          <select id="id_notas" name="id_notas" class="form-control"></select>
        </div>
         <div class="form-group col-md-2">
          <label for="inputZip">Usuario:</label>
          <select id="id_user" name="id_user" class="form-control"></select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputState">Status:</label>
          <select id="id_estado" name="id_estado" class="form-control"></select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Producto:</label>
          <select id="id_producto" name="id_producto" class="form-control"></select>
        </div>

<div class="form-group col-md-2">
          <label for="inputZip">Medida:</label>
          <select id="id_medida" name="id_medida" class="form-control"></select>
          </div>


          <div class="form-group col-md-2">
          <label for="inputZip">Color:</label>
          <select id="id_color" name="id_color" class="form-control"></select>
          </div>

          <div class="form-group col-md-2">
          <label for="inputZip">Categoria:</label>
          <select id="id_categoria" name="id_categoria" class="form-control"></select>
          </div>



          <div class="form-group col-md-2">
          <label for="inputState">Cantidad:</label>
          <input type="number" name="cantidad" id="cantidad" class="form-control" pattern="[0-9]+">
        </div>
    </div>    
        <div class="form-group col-md-2">
          <label for="inputZip">Costo Factura:</label>
          <input type="text" name="precio" value="" id="precio" class="form-control">
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
        <label for="inputCity">Codigo:</label>
        <input type="text" id="codigo" name="codigo" class="form-control" id="inputCity">
        </div>  
        <div class="form-group col-md-6">
          <label for="inputZip">Nota:</label>
          <input type="textarea" name="notas" value="" id="notas" class="form-control">
        </div>

    </div>
    <footer>
<p>   .</p>
             <button type="submit" class="btn btn-info" style="margin:10px">Registrar</button>
              <button type="reset" class="btn btn-danger" style="margin:10px">Limpiar Datos</button>
</footer>
            </form>

        </div>
    </div>
</div>
</body>
</html>
 