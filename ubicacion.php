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
									<li class="">
										<a href="habitaciones.php">Habitaciones</a>
									</li>
									<li class="active">
										<a href="ubicacion.php">Ubicación</a>
									</li>
									<li class="">
										<a href="login.php">Inicia Sesión</a>
									</li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header -->
			<div class="row">
				<div class="span12">
					<br />
					<br />
					<h1>Mapa y atracciones locales</h1>
					<br />
				</div>
				<div class="span3 sidebar">

					<ul class="nav">
						<li>
							<a class="active" href="ubicacions.php"><span>Area</span> General</a>
						</li>
						<li>
							<a href="https://www.google.com.mx/maps/preview#!q=bares+Jiquilpan+de+Ju%C3%A1rez&data=!4m11!1m10!2i5!4m8!1m3!1d25073!2d-102.7145361!3d20.0004635!3m2!1i1366!2i642!4f13.1" target="_blank" ><span>Bares</span></a>
						</li>
					</ul>
					<br />
				</div>

				<div class="span9">
					<p>
						Jiquilpan de Juárez, ciudad mexicana y cabecera del municipio de Jiquilpan, y cabecera del Distrito 04 Local y a nivel Federal,en el estado de Michoacán de Ocampo. Se encuentra a 1.560 m de altitud, en la margen derecha del río Jiquilpan, que se une al río Jaripo para desembocar en el lago de Chapala. Su clima es templado, con veranos cálidos y precipitaciones de junio a septiembre. Es un centro comercial, agrícola y ganadero. Sus productos agrícolas son maíz, frijol, trigo, cebada y garbanzo. Se elaboran productos derivados de la leche, que es una industria muy próspera en la ciudad.
					</p>

					<div id="map_canvas"></div>

					<div class="row">
						<div class="span4">
							<h3> Atracciones Locales </h3>
							<ul>
								<li>
									Biblioteca Pública <small>(murales de José Clemente Orozco)</small>
								</li>
								<li>
									Museo del que era antes Centro de Estudios de la Revolución Mexicana "Lázaro Cárdenas" CERMLC y ahora es la Unidad Académica de Estudios Regionales de la UNAM
								</li>
								<li>
									Escuela Francisco I. Madero <small>(Murales de Roberto Cueva del Río) </small>
								</li>
								<li>
									CIIDIR-Michoacán. Instituto Politécnico Nacional. <small>(Pinturas de Roberto Cueva del Río)</small>
								</li>
								<li>
									Parroquia San Francisco.
								</li>
								<li>
									Templo del Sagrado Corazón.
								</li>
								<li>
									Capilla de Santa Anita
								</li>
								<li>
									Templo de la Virgen de los Remedios en Totolán.
								</li>
								<li>
									Fuente de Zalate.
								</li>
								<li>
									Fuente de la Aguadora.
								</li>
								<li>
									Bosque Cuauhtémoc.
								</li>
								<li>
									Fuente de Tres guerras
								</li>
								<li>
									Santuario de Nuestra Señora de Guadalupe.
								</li>
								<li>
									Parroquia de San Cayetano
								</li>
							</ul>
						</div>
						<div class="span4 offset1">

							<h3> Festividades </h3>
							<ul>
								<li>
									Marzo/abril: Semana Santa.
								</li>
								<li>
									18 de marzo: Conmemoración de la Expropiación Petrolera.
								</li>
								<li>
									13 de abril: Aniversario de elevación a Rango de Ciudad (1891)
								</li>
								<li>
									21 de mayo: Natalicio del General Lázaro Cárdenas.
								</li>
								<li>
									4 de octubre: Fiesta en Honor de San Francisco de Asís.
								</li>
								<li>
									19 de octubre: Conmemoración de la muerte del General Lázaro Cárdenas.
								</li>
								<li>
									20 de noviembre: Aniversario de la Revolución Mexicana.
								</li>
								<li>
									1-12 de diciembre: Fiesta de la Virgen de Guadalupe.
								</li>
								<li>
									24 de diciembre - 2 de febrero: Fiesta del "niño de la cofradía" Danza de los Negros
								</li>
							</ul>
						</div>
					</div>
					<br />
					<br />
				</div>

			</div>
		</div>
		<!-- /container -->

		<footer>
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
						<h4>Ofertas Especiales<span class="line"></span></h4>
						<p>
							Hospedate cinco noches y disfrute de una noche más totalmente <b>gratis</b>!
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