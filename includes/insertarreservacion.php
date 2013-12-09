<?php 
include('conexion.php');
$conectar=Conectarse();
$checkin=$_GET['fecin'];
$checkout=$_GET['fecs'];
$estado="En espera";
$num_adu=$_GET['na'];
$num_ni=$_GET['nn'];
$id_cliente=$_GET['id'];
$habitacion=$_GET['hab'];

$consulta="INSERT INTO reservaciones (checkin, checkout, estado, num_adu, num_ni, id_cliente, habitacion)
VALUES ('$checkin','$checkout','$estado','$num_adu','$num_ni','$id_cliente','$habitacion')";
$resultado=mysql_query($consulta,$conectar);
echo $resultado;
if($resultado==1)
{
	echo "ya la hicimos";
	header("Location:../nuevareservacion.php");
}
else
{
	echo "No se inserto nada";
	header("Location:registromalo.php");
}

?>