<?php 
session_start();
if(isset($_SESSION['id']))
{
	$var=$_SESSION["id"];
}
else {
	$var=0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sistema de administración</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Stylesheets -->    
	<link href="css/archon.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<!-- Loading Custom Stylesheets -->    
	<link href="css/custom.css" rel="stylesheet">

	<!-- Loading Custom Stylesheets -->    
	<link href="css/custom.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="box-holder row">
		<!-- Title -->
		<h1>Hotel Palmira</h1><hr>
		<!-- Login Form -->
		<form action="valida.php" class="form-horizontal" role="form" method="Post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="user" class="col-lg-4 control-label">Nombre de usuario</label>
				<div class="col-lg-8">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-user"></i></span>
						<input type="text" class="form-control" id="user"  placeholder="Nombre de usuario..." name="usuario" required>
					</div>					  
				</div>
			</div>
			<div class="form-group">
				<label for="pass" class="col-lg-4 control-label">Password</label>
				<div class="col-lg-8">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-lock"></i></span>
						<input type="password" class="form-control" id="pass" placeholder="Contraseña..." name="contraseña" required>
					</div>					  
				</div>
			</div>
			<hr>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-default">Inicio de sesión</button>
				</div>
			</div>
		</form>
		<?php
						if ($var==-1) {
							echo '<div class="alert alert-error">';
  							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  							echo '<h4>Error!</h4> al ingresar tus datos...</div>';
						
							
						}
						
						?>
		
	</div>

</body>
</html>
