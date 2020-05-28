<?php
$servidor ="localhost";
$usuario ="root";
$pass="";
$basededatos="toldosmty";

$con = mysqli_connect($servidor,$usuario,$pass,$basededatos);
if (!$con)
{
  die("Error en conexion: " .mysqli_connect_error());

}

$user = $_POST["login"];
$pass = md5($_POST["password"]);

$query = mysqli_query($con,"SELECT * FROM  tuser WHERE user = '".$user."' AND password = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
{
session_start();
$_SESSION['login'] = "$user";
header('location: inicio.php');
}else if ($nr==0){
  echo '<script> alert("Error en la contraseña"); </script>';
  echo '<script>javascript:window.history.back();</script>';

}

 ?>
