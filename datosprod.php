<?php 
$conexion=mysqli_connect('localhost','root','','toldosmty');
$categoria=$_POST['categoria'];

	$sql="SELECT id_categoria,
			 nombrecaterogira 
		from categoria
		where id_categoria='$categoria'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Medidas:</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>