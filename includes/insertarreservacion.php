<?php 
include('conexion.php');
$conectar=Conectarse();
$consulta="INSERT INTO reservaciones (nombres, apellidos, user, pass, email, tel, direccion,ciudad,cp, estado, pais)
VALUES ('$nombres','$apellidos','$user','$pass','$email','$tel','$direccion','$ciudad','$cp','$estado','$pais')";
$resultado=mysql_query($consulta,$conectar);
echo $resultado;
if($resultado==1)
{
	echo "ya la hicimos";
	header("Location:../index.php");
}
else
{
	echo "No se inserto nada";
	header("Location:registromalo.php");
}

?>