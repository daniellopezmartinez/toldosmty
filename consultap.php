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
$query="SELECT * FROM proveedor ORDER BY id_proveedor";

if(isset($_POST['alumnos']))
{
	$q=$conexion->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM proveedor WHERE
		id_proveedor LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		apellido LIKE '%".$q."%' OR
		referencia LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%'";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.=
	'<table class="table">
		<tr class="bg-primary">
			<td>Id Proveedor</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Referencia</td>
			<td>Telefono</td>
			<td>email</td>
			<td>Cargo</td>
			<td colspan="2">Acciones</td>

		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id_proveedor'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['apellido'].'</td>
			<td>'.$filaAlumnos['referencia'].'</td>
			<td>'.$filaAlumnos['telefono'].'</td>
			<td>'.$filaAlumnos['email'].'</td>
			<td>'.$filaAlumnos['cargo'].'</td>
			<td><a href="assets/update_prov.php?id='.$filaAlumnos["id_proveedor"].'">Modificar</a></td>
			<td><a href="assets/delprov.php?id='.$filaAlumnos["id_proveedor"].'">Eliminar</a></td>
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
