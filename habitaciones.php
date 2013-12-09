<?php
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION["nombre_cli"];
}

ini_set("display_error", false);
include ('includes/conexion.php');
if ($errorConexionDB == false) {
	$consultaHabitaciones1 = habitaciones($mysqli, 0, 3);
	$consultaHabitaciones2 = habitaciones($mysqli, 3, 3);
	$consultaHabitaciones3 = habitaciones($mysqli, 6, 9);

} else {
	$consultaHabitaciones = '<tr id="sinDatos">
			<td colspan="5" class="centerTXT">ERROR AL CONECTAR CON LA BASE DE DATOS</td>
	   	</tr>';
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
									<li class="active">
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
			<div class="row-fluid">

				<div class="span12">
					<br />
					<br />
					<h1>Habitaciones y Suites</h1>

					<div class="row-fluid">
						<?php echo $consultaHabitaciones1; ?>
					</div>
					<div class="row-fluid">
						<?php  echo $consultaHabitaciones2; ?>
					</div>
					<div class="row-fluid">
						<?php echo $consultaHabitaciones3; ?>
					</div>

				</div>

			</div>
		</div>
		<!-- /container -->
		<footer>
			|
			<div class="container">
				<div class="row footer_section_pre">

					<div class="span4">
						<h4>Hotel Palmira<span class="line"></span></h4>

						<p>
							Lázaro Cárdenas Sur # 200
						</p>
						<p>
							Jiquilpan, Michoacan De Ocampo, Mexico
							<br />
							Tel: 01 353 533 0091
							<br />
							Email: hotelpalmiramich@prodigy.net.mx
						</p>

						<ul data-facebook-action="recommend" data-url="#" class="socialcount socialcount-small recommend grade-a">
							<li class="facebook">
								<a title="Comparte en Facebook" href="https://www.facebook.com/HotelPalmira"><span class="social-icon icon-facebook"></span><span class="count"></span></a>
							</li>
						</ul>
						<br />
						<p class="copy">
							&copy; 2013 <a href="http://appsarea.com/">DJLabs</a>
						</p>

					</div>
					<div class="span4">
						<h4>Patrocinadores<span class="line"></span></h4>
						<ul class="thumbnails">
							<li class="span2">
								<div class="thumbnail">
									<img src="css/images/airlines/Pueblo-Mágico.jpg" alt="" />
								</div>
							</li>
							<li class="span2">
								<div class="thumbnail">
									<img src="css/images/airlines/viajesnavacastro.jpg" alt="" />
								</div>
							</li>
						</ul>
					</div>
					<div class="span4">
						<?php
						if (isset($nombre)) {
							echo '<h4>Bienvenido<span class="line"></span></h4>';
							echo '<p>' . $nombre . '</p>';
							echo '<a href="includes/logout.php">Salir</a>';
						} else {
							echo '<a href="login.php"><h4>Inicia Sesión<span class="line"></span></h4></a>';
							echo '<a href="registro.php"><h4>Crea una cuenta<span class="line"></span></h4></a>';
						}
						?>
					</div>
				</div>
			</div>
		</footer>

		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>