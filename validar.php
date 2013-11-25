<?php
include_once 'lib/procedimientos.php';
$proc = new procedimientos();

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
echo "$user <br/> $pass <br/>";
$id_cli = $proc -> buscar_usuario($user, $pass);
echo "<br/>$id_cli";
?>