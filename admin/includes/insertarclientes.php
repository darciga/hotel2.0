<?php
$DatabasePort=3306;
$conectado = mysqli_init();
$conectado->real_connect ( "localhost", "root", "", "sistema_reservacion", $DatabasePort );

if (mysqli_connect_error()) {

echo("Error de conexión: %sn". mysqli_connect_error()); 
exit();

} else {

   // La conexión se ha establecido

}
if(!$_POST){
	echo "No llegaron los datos";
}
else{
	$nombre=$_POST['nombre_cli'];
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$mail=$_POST['email'];
	$tel=$_POST['tel'];
	echo "$nombre<br/>";
	echo "$user<br/>";
	echo "$pass<br/>";
	echo "$mail<br/>";
	echo "$tel<br/>";
	
	$consulta=$conectado->prepare("INSERT INTO clientes(nombre_cli,user,pass,email,tel)
		VALUES (?,?,?,?,?);");
	$consulta->bind_param('sssss',$nombre,$user,$pass,$mail,$tel);
	$consulta->execute();
	$consulta->close();
	header("Location:../clientes.php");

}

	
	//header("Location:../clientes.php");
?>