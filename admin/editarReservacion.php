<?php
include ('../includes/conexion.php');
$idres = $_GET['idres'];
$IH = $_GET['IH'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$estado = $_POST['estado'];
$num_adu = $_POST['num_adu'];
$num_ni = $_POST['num_ni'];
$id_cliente = $_POST['id_cliente'];
$habitacion = $_POST['habitacion'];

$conectar = Conectarse();
$consulta = "UPDATE reservaciones SET checkin='$checkin', checkout='$checkout',
estado='$estado', num_adu='$num_adu', num_ni='$num_ni' WHERE id_reservacion=$idres";
$query = "UPDATE habitaciones SET estado='Ocupada' WHERE id_habitacion='$IH'";
//echo $consulta;
$resultado = mysql_query($consulta, $conectar);
$result = mysql_query($query,$conectar);
echo "Resultado consulta $result ";
if ($resultado==1 AND $result=1) {
	header("Location:reservaciones.php");
	//echo $resultado;
	echo "Modificacion Finalizada";
} else {
	echo "No se Modifico";

}
?>