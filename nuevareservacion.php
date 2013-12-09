<?php
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION['nombre_cli'];
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Hotel Palmira</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel-responsive.css" type="text/css" />
		<link rel="stylesheet" href="js/slider/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/socialcount-with-icons.css" type="text/css" media="screen" />
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<style>
			div.ui-datepicker {
				font-size: 11px;
			}
		</style>

		<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/bootstrap_ie7.css" type="text/css">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<!-- start header -->
				<div class="span5 logo">
					<a href="index.php">
					<div class="row">
						<div class="span3 logo">
							<h1>Hotel<span>Palmira</span></h1>
							<p>
								&#9733;&#9733;&#9733;&#9734;&#9734;
							</p>
						</div>
					</div> </a>
				</div>
				<div class="span6 pull-right main_menu">
					<div class="navbar">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

							<div class="nav-collapse">
								<ul class="nav nav-pills">
									<li class="">
										<a href="index.php">Inicio</a>
									</li>
									<li class="">
										<a href="habitaciones.php">Habitaciones</a>
									</li>
									<li class="">
										<a href="ubicacion.php">Ubicación</a>
									</li>
									<?php
									if (isset($nombre)) {
										echo '<li class=""><a class="tooltips" href="#">Mi cuenta<span>Bienvenido ' . $nombre . '</span></a></li>';

									} else {
										echo '<li class=""><a href="login.php">Inicia Sesión</a></li>';
									}
									?>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header -->
		</div>
		<div class="container-fluid">
			<div class="span12">
				<div class="row">
					<div class="span9" height="px">
						<h1>Felicidades</br><small> ya reservaste tu habitacion </small></h1>
						<h2><a href="index.php">Ir a inicio</a></br></h2>
						

					</div><!--/span9-->
					

				</div><!--/row va a contener span9-->

			</div><!--/span12-->

		</div><!-- /container-fluid-->

		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>