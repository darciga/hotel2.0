<?php
session_start();
include ('../includes/conexion.php');
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
$conectar = Conectarse();
$consulta = "SELECT id_user, nombre FROM admins WHERE user='$user' and pass='$pass'";
$resultado = mysql_query($consulta, $conectar);
if (mysql_num_rows($resultado)) {
	$array = mysql_fetch_array($resultado);
	$_SESSION['id_admin'] = $array['id_user'];
	$_SESSION['nombre_admin'] = $array['nombre'];
	header("Location:inicio.php");

} else {

	header("Location:index.php");
	$_SESSION[id] = -1;
}
?>