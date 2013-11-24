<?php 
session_start();
include('conexion.php');
$user=$_POST['usuario'];
$pass=$_POST['password'];
$conectar=Conectarse();
$consulta="SELECT id_cliente, nombres FROM clientes WHERE user='$user' and pass='$pass'";
$resultado=mysql_query($consulta,$conectar);
echo $resultado;
if(mysql_num_rows($resultado))
{
	$array=mysql_fetch_array($resultado);
	$_SESSION['id']=$array['id_cliente'];
	$_SESSION['nombre']=$array['nombres'];
	header("Location:../index.php");
	echo $resultado;
}
else
{
	header("Location:../login.php");
	$_SESSION[id]=-1;
}
?>