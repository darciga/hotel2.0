<?php
include ('../includes/conexion.php');
$id = $_GET['idcli'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$user = $_POST['user'];

$email = $_POST['email'];
$tel = $_POST['tel'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$cp = $_POST['cp'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
echo "$id<br/>";
echo "$nombres<br/>";
echo "$apellidos <br/>";
echo "$user <br/>";
echo "$email <br/>";
echo "$tel <br/>";
echo "$direccion <br/>";
echo "$ciudad <br/>";
echo "$cp <br/>";
echo "$estado <br/>";
echo "$pais <br/>";
$conectar = Conectarse();
$consulta = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', user='$user', email='$email', 
tel='$tel', direccion='$direccion', ciudad='$ciudad', cp='$cp', estado='$estado', pais='$pais' WHERE id_cliente='$id'";
$resultado = mysql_query($consulta, $conectar);
if ($resultado==1) {
	header("Location:clientes.php");
	echo $resultado;
	echo "Se modifico";
} else {
	echo "No se borro";

}
?>