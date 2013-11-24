<?php
session_start();
	$habi=$_POST['hab'];
	$cin=$_POST['checkin'];
	$cout=$_POST['checkout'];
	$ad=$_POST['adul'];
	$ni=$_POST['nin'];
	$id=$_SESSION['id'];
	echo $id;





 ?>
<!DOCTYPE html>
<html lang="es"><head>
	
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
		div.ui-datepicker{
			font-size:11px;
		}
	</style>
		
    <!--[if lt IE 9]>
		<link rel="stylesheet" href="css/bootstrap_ie7.css" type="text/css">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
	
		<div class="container-fluid">
			<div class="row"><!-- start header -->
				<div class="span5 logo">
					<a href="index.php">
					<div class="row">
						<div class="span3 logo">
							<h1>Hotel<span>Palmira</span></h1>
							<p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
						</div>
					</div>
					</a>
				</div>		
				<div class="span6 pull-right main_menu">
					<div class="navbar">
						<div class="container">
							 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>

							<div class="nav-collapse">
								<ul class="nav nav-pills">
									<li class=""><a href="index.php">Inicio</a></li>
									<li class="active"><a href="habitaciones.php">Habitaciones</a></li>
									<li class=""><a href="ubicacion.php">Ubicación</a></li>
									<li class=""><a href="login.php">Inicia Sesión</a></li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header --><div class="row booking_summary">
	
	<div class="span12">	
		
		<div class="row">
			<div class="span6">



				<form class="form-horizontal" />
					
					<fieldset>
			

						

					</fieldset>
				</form>



				
			</div>
			
			<div class="span6">
				<br /><br />
				<h3><span>Detalles de tu </span>reservacion</h3>
				<p>
					Tus fechas:
					<div class="pull-left">Check in : <i></i> <?php echo "$cin"; ?></div><br />
					<div class="pull-left">Check out : <i><?php echo "$cout"; ?></i></div><br />

					<br />
					<h3><span>Habitacion</span> seleccionada</h3>
					<br />
					<div class="pull-left"><i><?php echo "$habi"; ?></i></div><br />
					<br /><br />
				</p>

			</div>
			<div class="span2">
						
						<?php echo '<a class="btn btn-primary btn-large check-availability" href="insertarreservacion.php?id='.$id.'&hab='.$habi.'">Confirmar</a>' ?>
					</div>

		</div>
		

		
		
		
	</div>
	
</div></div> <!-- /container -->

<footer>
	<div class="container">
	<div class="row footer_section_pre">

	<div class="span4">
		<h4>Hotel Palmira<span class="line"></span></h4>

		<p>Lázaro Cárdenas Sur # 200</p>
		<p>Jiquilpan, Michoacan De Ocampo, Mexico<br />Tel: 01 353 533 0091  <br />Email: hotelpalmiramich@prodigy.net.mx</p>

		<ul data-facebook-action="recommend" data-url="#" class="socialcount socialcount-small recommend grade-a">
			<li class="facebook"><a title="Comparte en Facebook" href="https://www.facebook.com/HotelPalmira"><span class="social-icon icon-facebook"></span><span class="count"></span></a></li>
		</ul>
		<br />
		<p class="copy">&copy; 2013 <a href="http://appsarea.com/">DJLabs</a></p>

	</div>
	<div class="span4">
		<h4>Ofertas Especiales<span class="line"></span></h4>
		<p>Hospedate cinco noches y disfrute de una noche más totalmente <b>gratis</b>!</p>
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