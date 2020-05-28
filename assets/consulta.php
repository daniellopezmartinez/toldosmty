<?
$usuario = "root";
$contrasena = "";
$host = "localhost";
$basededatos = "toldosmty";
//Crear una conexion con el servidor de base da datos con mysqli_connect()
$conexion =new mysqli($host,$usuario,$contrasena,$basededatos);
or die ("No se ha podido conectar al servidor de la base de datos");

$tabla="";
$query="SELECT * FROM clientes ORDER BY fecha DESC";

if(isset($_POST['clientes']))
{
  $q=$conexion->real_escape_string($_POST['clientes']);
  $query="SELECT * FROM clientes WHERE
  id_cliente LIKE '%".$q."%' OR
  nombre LIKE '%".$q."%' OR
  apellido LIKE '%".$q."%' OR
  apellidom LIKE '%".$q."%' OR
  calle LIKE '%".$q."%' OR
  colonia LIKE '%".$q."%' OR
  municipio LIKE '%".$q."%' OR
  referencia LIKE '%".$q."%' OR
  email LIKE '%".$q."%' OR
  telefono LIKE '%".$q."%' OR
  rfc LIKE '%".$q."%' OR
  codigo_postal LIKE '%".$q."%'";
  }
$buscarClientes=$conexion->query($query);
if (buscarClientes->num_rows > 0)
{
  $tabla.=
  '<table class="table">
    <tr class ="bg-primary">
      <td>Id cliente</td>
      <td>Nombre</td>
      <td>Ap. Paterno</td>
      <td>Ap. Materno</td>
      <td>Calle</td>
      <td>Colonia</td>
      <td>Municipio</td>
      <td>Referencia</td>
      <td>email</td>
      <td>telefono</td>
      <td>RFC</td>
      <td>Codigo Postal</td>
    </tr>
      ';

  while ($filaClientes= $buscarClientes->fetch_assoc())
    {
        $tabla.=
        '<table class="table">
          <tr class ="bg-primary">
            <td>'.$filaClientes['id_cliente'].'</td>
            <td>'.$filaClientes['nombre'].'</td>
            <td>'.$filaClientes['apellido'].'</td>
            <td>'.$filaClientes['apellidom'].'</td>
            <td>'.$filaClientes['calle'].'</td>
            <td>'.$filaClientes['colonia'].'</td>
            <td>'.$filaClientes['municipio'].'</td>
            <td>'.$filaClientes['referencia'].'</td>
            <td>'.$filaClientes['email'].'</td>
            <td>'.$filaClientes['telefono'].'</td>
            <td>'.$filaClientes['rfc'].'</td>
            <td>'.$filaClientes['codigo_postal'].'</td>
          </tr>';
          }
            $tabla.='</table';
}else {
  $tabla="No se encontro ningun cliente con la busqueda realizada.";
}
echo &tabla;
  ?>
