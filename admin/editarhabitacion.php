<?php
include ('../includes/conexion.php');
$idhab = $_GET['idhab'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$estado = $_POST['estado'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
echo "$idhab<br/>";
echo "$nombre<br/>";
echo "$tipo <br/>";
echo "$estado <br/>";
echo "$descripcion <br/>";
echo "$imagen <br/>";

$conectar = Conectarse();
$consulta = "UPDATE habitaciones SET nombre='$nombre', tipo='$tipo', estado='$estado', 
descripcion='$descripcion', imagen='$imagen' WHERE id_habitacion=$idhab";
 echo $consulta;
$resultado = mysql_query($consulta, $conectar);
if ($resultado==1) {
	header("Location:habitaciones.php");
	echo $resultado;
	echo "Modificacion Finalizada";
} else {
	echo "No se Modifico";

}
?>