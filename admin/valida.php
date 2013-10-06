<?php
require 'conexion.php';
$user=$_GET['user'];
$pass=$_GET['pass'];
/*Creamos la instancia del objeto. Ya estamos conectados*/
$bd=conexion::getInstance();

/*Construccion de la consulta*/
$sql="SELECT * FROM  `admins` WHERE user='$user' and pass=MD5('$pass')";
/*Ejecutamos la consulta*/
$stmt=$bd->ejecutar($sql);
//vemos si el usuario y contraseña es váildo
//si la ejecución de la sentencia SQL nos da algún resultado
//es que si que existe esa conbinación usuario/contraseña
if (mysql_num_rows($stmt)!=0) {
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    session_register("misesion");
    $misesion['user'] = $user;
    $misesion['pass'] = $pass;
    header ("Location: inicio.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: index.php?errorusuario=Verifique sus datos algo esta mal");
}
?>