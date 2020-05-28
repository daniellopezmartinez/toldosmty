<?php
$host = 'localhost';
$basededatos = 'toldosmty';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$tabla="";
$query="SELECT * FROM clientes ORDER BY id_cliente";

if(isset($_POST['alumnos']))
{
	$q=$conexion->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM clientes WHERE
		id_cliente LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		apellido LIKE '%".$q."%' OR
		email LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%'";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.=
	'<table class="table">
		<tr class="bg-primary">
			<td>Id Cliente</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Correo</td>
			<td>Telefono</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id_cliente'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['apellido'].'</td>
			<td>'.$filaAlumnos['email'].'</td>
			<td>'.$filaAlumnos['telefono'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
