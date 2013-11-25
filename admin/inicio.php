<?php
include ('../includes/conexion.php');
session_start();
$usuario = $_SESSION['nombre'];
$conectar = Conectarse();
$consulta = "SELECT id_cliente FROM clientes";
$resultado = mysql_query($consulta, $conectar);
$numero_clientes = mysql_num_rows($resultado);
$sql = "SELECT id_reservacion FROM reservaciones";
$resultado = mysql_query($sql, $conectar);
$num_re = mysql_num_rows($resultado);
$sql = "SELECT * FROM habitaciones WHERE estado like 'desocupada%'";
$resultado = mysql_query($sql, $conectar);
$num_hab = mysql_num_rows($resultado);
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
		<script type="text/javascript" src="js/mainJavaScript.js"></script>
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
									<span class="name"><?php echo $usuario; ?></span>
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
						<div class="box span10">
							<div class="box-header">
								<h2><i class="icon-bar-chart"></i><span class="break"></span>Panel</h2>
							</div>
							<div class="box-content">
								<div class="page-header">
									<h1>Bienvenido <small> al panel de administración del sistema de reservaciones</small></h1>
								</div>
								<div class="row-fluid" style="height: 339px;">
									<div class="span12">
										<h3>En este panel de administración podras gestionar tus: </h3>

										<div class="span3 smallstat box mobileHalf" ontablet="span3" ondesktop="span3">
											<div class="boxchart-overlay blue">
												<div class="boxchart">
													5,6,7,2,0,4,2,4,8,2,3,3,2
												</div>
											</div>
											<span class="title"><a href="clientes.php">Clientes</a></span>
											<span class="value"><?php echo $numero_clientes; ?></span>
										</div>

										<div class="span3 smallstat box mobileHalf" ontablet="span3" ondesktop="span3">
											<div class="boxchart-overlay red">
												<div class="boxchart">
													1,2,6,4,0,8,2,4,5,3,1,7,5
												</div>
											</div>
											<span class="title"><a href="reservaciones.php">Reservaciones</a></span>
											<span class="value"><?php echo $num_re ?></span>
										</div>

										<div class="span3 smallstat box mobileHalf noMargin" ontablet="span3" ondesktop="span3">
											<i class="icon-download-alt green"></i>
											<span class="title"><a href="habitaciones.php">Habitaciones</a></span>
											<span class="value"><?php echo $num_hab ?></span>
										</div>

									</div>

								</div><!--/row -->

							</div>
						</div><!--/span-->

						<div class="box span2">
							<div class="box-header" data-original-title="">
								<h2><i class="icon-list"></i><span class="break"></span>Otros Sitio</h2>
							</div>
							<div class="box-content">
								<ul>
									<li>
										<a href="../index.php">Hotel</a>
									</li>
									<li>
										<a href="#">DJLabs</a>
									</li>
								</ul>

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
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.touch-punch.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/counter.min.js"></script>
		<script src="js/raphael.2.1.0.min.js"></script>
		<script src="js/justgage.1.0.1.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/wizard.min.js"></script>
		<script src="js/core.min.js"></script>
		<script src="js/charts.min.js"></script>
		<script src="js/custom.min.js"></script>
		<!-- end: JavaScript-->

	</body>
</html>