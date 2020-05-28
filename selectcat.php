<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<div id="categoria">


<label><select name="">

<?php 
include 'conexion.php';
$consulta="SELECT * FROM categoria";
$ejecutar=mysqli_query($conexion,$consulta);
 ?>




<?php foreach ($ejecutar as $opciones): ?>
<option value="<?php echo $opciones['nombrecategoria'] ?>"><?php echo $opciones['nombrecategoria']?></option>>


<?php endforeach?>
 ?>

</div>

</body>
</html>