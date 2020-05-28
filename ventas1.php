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
require ('database.php');
$objData = new database();

if(isset($_GET['opcion'])){
 

}

$sth = $objData->prepare('SELECT nombre FROM clientes');
$sth->execute();

$result = $sth->fetchAll();


?>

 <!DOCTYPE html>
 <html>
 <head>
 <title>Ventas</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
   <link rel="shortcut icon" href="img/logoico.ico">
   <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
   <script src="librerias/bootstrap/js/bootstrap.js"></script>
</head>
 <body>
<?php require 'menubr.php'?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-12"> 
            <h2 class="display-7"> Venta de Producto</h2>
            <hr class="bg-info">
            <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
            
 <form action="addventa.php" method="POST"/>
 <fieldset>
    <legend> Datos de Cliente</legend>
    <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCity">Nombre del Cliente</label>
           <select id="id_cliente" name="id_cliente" class="form-control" onchange="return idnombre();">
           <option value =""></option>
           <option value ="hola">hola</option>
          |</select>
        </div>
        <div class="form-group col-md-5">
          <label for="inputState">Apellido:</label>
          <select id="id_apellido" name="id_apellido" class="form-control" disabled></select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Usuario:</label>
          <select id="id_user" name="id_user" class="form-control"></select>
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
          <label for="inputZip">Precio:</label>
          <input type="text" name="precio" value="" id="precio" class="form-control">
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
        <label for="inputCity">Codigo:</label>
        <input type="text" id="codigo" name="codigo" class="form-control" id="inputCity">
        </div>  
        <div class="form-group col-md-6">
          <label for="inputZip">Observaciones:</label>
          <input type="textarea" name="notas" value="" id="notas" class="form-control">
        </div>

    </div>
    <footer>
<p>   .</p>
             <button type="submit" class="btn btn-info" style="margin:10px">Registrar Venta</button>
              <button type="reset" class="btn btn-danger" style="margin:10px">Limpiar Datos</button>
</footer>
</fieldset>

            </form>

        </div>
    </div>
</div>

<!--aJaax-->
   <script src="librerias/jquery-3.4.1.min.js"></script>
   <script type="text/javascript">
    function idnombre(){
      var opcion=document.getElementById('id_cliente').value;
      window.location.href='http://localhost/tlmty/ventas1.php?opcion='+opcion;
    }
</script>

</body>
</html>
 