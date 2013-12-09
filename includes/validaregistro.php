<?php
include('conexion.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$cp=$_POST['cp'];
$estado=$_POST['estado'];
$pais=$_POST['pais'];

	echo "$apellidos <br/>";
	echo "$user <br/>";
	echo "$pass <br/>";
	echo "$email <br/>";
	echo "$tel <br/>";
	echo "$direccion <br/>";
	echo "$ciudad <br/>";
	echo "$cp <br/>";
	echo "$estado <br/>";
	echo "$pais <br/>";
$conectar=Conectarse();
$consulta="INSERT INTO clientes (nombres, apellidos, user, pass, email, tel, direccion,ciudad,cp, estado, pais)
VALUES ('$nombres','$apellidos','$user','$pass','$email','$tel','$direccion','$ciudad','$cp','$estado','$pais')";
$resultado=mysql_query($consulta,$conectar);
echo $resultado;
if($resultado==1)
{
	echo "ya la hicimos";
	header("Location:../cuentanueva.php");
	//header("Location:../cuentanueva.php");
}
else
{
	echo "No se inserto nada";
	header("Location:registromalo.php");
}
	
	
?>