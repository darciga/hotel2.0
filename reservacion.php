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
									<li class=""><a href="habitaciones.php">Habitaciones</a></li>
									<li class=""><a href="ubicacion.php">Ubicación</a></li>
									<li class=""><a href="login.php">Inicia Sesión</a></li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header --><div class="row book-start">
	
	<div class="span12">	
		<br /><br />
		<h1>Reserva tu habiatación<br /><small>¿Cuándo quieres reservar con nosotros?</small></h1>

		<div class="row">
			<div class="span9">

				<h3><span>Check-in</span> date</h3>
				<div type="text" class="datepicker_from" name="from"></div>
				<h3><span>Check-out</span> date</h3>
				<div type="text" class="datepicker_to" name="to"></div>

			</div>			
			<div class="span3">
				<div class="row">
					<div class="span3">
						<h3><span>select</span> your room</h3>
						<div class="room_selector" data-price="34" data-adults="1" data-kids="1">
							<h5><a href="#" class="pull-left"><i class="icon-chevron-left"></i></a>Single room<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/single_room.jpg" alt="" /></a>
							<p>All single rooms have one single bed and sleeps one adult. A 25-inch TV is included.</p>
						</div>
						<div class="room_selector" data-price="48" data-adults="2" data-kids="1" style="display: none;">
							<h5><a href="#" class="pull-left "><i class="icon-chevron-left"></i></a>Double Room<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/double_room.jpg" alt="" /></a>
							<p>All double rooms have a single double bed and sleeps two adults.</p>
						</div>		
						<div class="room_selector" data-price="62" data-adults="3" data-kids="2" style="display: none;">
							<h5><a href="#" class="pull-left "><i class="icon-chevron-left"></i></a>Triple Room<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/triple_room.jpg" alt="" /></a>
							<p>All triple rooms have one double bed and a single bed and sleeps up to three people. </p>
						</div>	
						<div class="room_selector" data-price="72" data-adults="4" data-kids="3" style="display: none;">
							<h5><a href="#" class="pull-left "><i class="icon-chevron-left"></i></a>Luxury Room<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/luxury_room.jpg" alt="" /></a>
							<p>All rooms have two double beds and a balcony. Sleeps up to four adults.</p>
						</div>		
						<div class="room_selector" data-price="97" data-adults="4" data-kids="3" style="display: none;">
							<h5><a href="#" class="pull-left "><i class="icon-chevron-left"></i></a>Private pool room<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/private_pool.jpg" alt="" /></a>
							<p>A private pool, two double beds and a sea view. Sleeps up to four adults.</p>
						</div>
						<div class="room_selector" data-price="128" data-adults="5" data-kids="4" style="display: none;">
							<h5><a href="#" class="pull-left "><i class="icon-chevron-left"></i></a>Private villa<a href="#" class="pull-right "><i class="icon-chevron-right"></i></a></h5>
							<a href="listings.php"><img src="css/images/rooms/private_villa.jpg" alt="" /></a>
							<p>All villas have an en-suite bathroom and sundeck. Sleeps up to five adults.</p>
						</div>
					</div>					
				</div>
			</div>	<br />
			<div class="row">
				<div class="span3">
					<h3><span>Rooms</span> and people</h3>
					<div class="form-horizontal">
						<div class="control-group">
							<label class="control-label" for="inputEmail">Rooms</label>
							<div class="controls">
								<select class="span1 select_rooms">
									<option />1
									<option />2
									<option />3
									<option />4
									<option />5
								</select>
							</div>
						</div>			
						
						
						<div class="control-group">
							<label class="control-label" for="inputEmail">Adults per room</label>
							<div class="controls">
								<select class="span1 select_adults">
									<option />1
									<option />2
									<option />3
									<option />4
									<option />5
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputEmail">Kids per room</label>
							<div class="controls">
								<select class="span1 select_kids">
									<option />1
									<option />2
									<option />3
									<option />4
									<option />5
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="span3">
						<h1 id="total_price">128.00 GBP</h1>
						<a class="btn btn-primary btn-large book-now" href="book.php">Book now!</a>
					</div>
				</div>		</div>
			</div>
			<br /><br />				
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