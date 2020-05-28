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
    <title>Inventarios</title>
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
            <h2 class="display-7">Inventario</h2>

        
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
          <tr>
        <th scope="col">Medida</th>
        <th scope="col">Status</th>
        <th scope="col">Color</th>
        <th scope="col">Categoria</th>
        <th scope="col">Nombre</th>
        <th scope="col">Codigo</th>
        <th scope="col">Precio</th>
        <th scope="col">Costo</th>
        <th scope="col">Cantidad</th>
        </tr>
    </thead>
     <tfoot>
            <tr>
     <th scope="col">Medida</th>
        <th scope="col">Status</th>
        <th scope="col">Color</th>
        <th scope="col">Categoria</th>
        <th scope="col">Nombre</th>
        <th scope="col">Codigo</th>
        <th scope="col">Precio</th>
        <th scope="col">Costo</th>
        <th scope="col">Cantidad</th>
                
            </tr>
    </tfoot>

      <?php 

        $sql="SELECT 
        id_producto
        nombre,
        medida.medida, 
        estado.status, 
        color.color,
        categoria.nombrecategoria,
        nombre,
        codigo,
        precio,
        costo,
        cantidad
        FROM 
        productos
        INNER JOIN medida ON productos.id_medida = medida.id_medida
        INNER JOIN estado ON productos.id_estado = estado.id_estado
        INNER JOIN tuser ON productos.id_user = tuser.id_user  
        INNER JOIN color On productos.id_color = color.id_color
        INNER JOIN categoria ON productos.id_categoria = categoria.id_categoria
        ";

        $result=mysqli_query($conexion,$sql);
        while ($ver=mysqli_fetch_row($result)){ 
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
        <td><?php echo $ver[9] ?></td>  
                       
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
</body>
</html>


<!-- nombre,id_estado,id_medida,id_user,id_color,id_categoria,codigo,fecha,precio,costo from productos"; 