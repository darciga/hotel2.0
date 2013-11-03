<?php
session_start();

$usuario=$_SESSION['nombre'];

ini_set("display_error", false);

include('../includes/conexion.php');

if($errorConexionDB == false){
	$cosultaReservacion = consultarReservaciones($mysqli);	
}
else {
	$cosultaReservacion = '<tr id="sinDatos">
			<td colspan="8" class="centerTXT">ERROR AL CONECTAR CON LA BASE DE DATOS</td>
	   	</tr>';
}
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<!-- start: Meta -->
		<meta charset="utf-8" />
		<title>Administracion del Sistema</title>
		<!-- end: Meta -->

		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- end: Mobile Specific -->
		<!-- start: CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="css/style.min.css" rel="stylesheet" />
		<link href="css/style-responsive.min.css" rel="stylesheet" />
		<link href="css/retina.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/dist/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/lib/jquery.metadata.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/localization/messages_es.js"></script>
		<script type="text/javascript" src="js/Reservaciones.js"></script>
		<!-- end: CSS -->

		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
		<![endif]-->

		<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
		<![endif]-->

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>
					<div class="row-fluid">
						<a class="brand span2" href="inicio.php"><span>Hotel</span></a>
					</div>
					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">

							<li class="dropdown">
								<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="user">
									<span class="hello">Bienvenido!</span>
									<span class="name"><?php echo $usuario;?></span>
								</div> </a>
								<ul class="dropdown-menu">
									<li class="dropdown-menu-title">

									</li>

									<li>
										<a href="logout.php"><i class="icon-off"></i> Cerrar Sesión</a>
									</li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->

				</div>
			</div>
		</div>
		<!-- start: Header -->

		<div class="container-fluid-full">
			<div class="row-fluid">

				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li>
								<a href="inicio.php"><span class="hidden-tablet">Inicio</span></a>
							</li>
							<li>
								<a href="clientes.php"><span class="hidden-tablet">Clientes</span></a>
							</li>
							<li>
								<a href="reservaciones.php"><span class="hidden-tablet"> Reservaciones</span></a>
							</li>
							<li>
								<a href="habitaciones.php"><span class="hidden-tablet"> Habitaciones</span></a>
							</li>
							<li>
								<a href="admins.php"><span class="hidden-tablet"> Usuarios del sistema</span></a>
							</li>

						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->

				<!-- start: Content -->
				<div id="content" class="span10">
					<div class="row-fluid">
						<div class="box span12">
							<div class="box-header" data-original-title="">
								<h2><i class="icon-user"></i><span class="break"></span>Reservaciones</h2>

							</div>
							<div class="box-content">
								<table class="table table-striped table-bordered bootstrap-datatable datatable">
									<thead>
										<tr>
											<th>Habitacion</th>
											<th>Fecha de entrada</th>
											<th>Fecha de salida</th>
											<th>Num Adultos</th>
											<th>Num Niños</th>
											<th>Estado</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody id="listaUsuariosOk">
										<?php echo $cosultaReservacion?>
										
									</tbody>
								</table>
							</div>
						</div><!--/span-->

					</div><!--/row-->

				</div>
				<!-- end: Content -->

			</div><!--/fluid-row-->

			<footer>
				<p>
					<span style="text-align:left;float:left">&copy; 2013 DJLabs</span>
				</p>

			</footer>

		</div><!--/.fluid-container-->

		<!-- start: JavaScript-->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/core.min.js"></script>
		<!-- end: JavaScript-->

	</body>
</html>