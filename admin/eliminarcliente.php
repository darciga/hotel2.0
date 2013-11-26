<?php
include ('../includes/conexion.php');
$id = $_GET['idcli'];
echo $id . "<br>";
$conectar = Conectarse();
$consulta = "DELETE FROM clientes WHERE id_cliente='$id' LIMIT 1";
$resultado = mysql_query($consulta, $conectar);
echo $resultado;
if ($resultado == 1) {
	header("Location:clientes.php");
	echo $resultado;
	echo "Se borro";
} else {
	echo "No se borro";

}
?>