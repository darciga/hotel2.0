<?php 

$conexion=mysql_connect("localhost","root","")
or die("No se pudo conectar al servidor");
echo "Conectado <br/>";
mysql_select_db("sistema_reservacion") or die("No db");
echo "BD seleccionada<br/>";
$consulta =" SELECT user from clientes where id_cliente=1";

$ejecutar=mysql_query($consulta,$conexion)or die("No se ejecuto la consulta<br/>");
echo "Se ejecuto consulta<br />";
echo $ejecutar;

?>