<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<div id="medidas">


<label><select name="">


<?php 

include 'conexion.php';
$consulta="SELECT * FROM medida";
$ejecutar=mysqli_query($conexion,$consulta);
 
 ?>




<?php foreach ($ejecutar as $opciones): ?>
	<option value="<?php echo $opciones['medida'] ?>"><?php echo $opciones['medida']?></option>>


<?php endforeach?>
 ?>

</div>

</body>
</html>