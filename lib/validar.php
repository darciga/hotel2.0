<?php
    include_once 'procedimientos.php';
	$proc= new procedimientos();
	
		$user=$_POST['idc'];
		
		
		$msj =$proc->mostrar_usuarios($user);
		echo "<br/>$msj";
	
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>validar</title>
		<meta name="description" content="">
		<meta name="author" content="Dante Omar">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div>
			<header>
				<h1>validar</h1>
			</header>
			
		</div>
	</body>
</html>
