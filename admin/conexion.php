<?php

function Conectarse()
{
if (!($link=mysql_connect("127.0.0.1","root",""))) {
echo "Error conectando a la base de datos.";
exit();
}
 
if (!mysql_select_db("sistema_reservacion",$link)){
echo "Error seleccionando la base de datos.";
exit();
}
return $link;
}
$link = Conectarse();
mysql_close($link); //cierra la conexion
?>