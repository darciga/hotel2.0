<!DOCTYPE html>
<html lang="es"><head>
	
    <meta charset="utf-8" />
    <title>Hotel - Bootstrap</title>
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
					<a href="index.html">
					<div class="row">
						<div class="span3 logo">
							<h1>Bootstrap<span>Hotel</span></h1>
							<p>&#9733;&#9733;&#9733;&#9733;&#9734;</p>
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
									<li class=""><a href="index.html">Home</a></li>
									<li class=""><a href="rooms.html">Rooms</a></li>
									<li class=""><a href="facilities.html">Facilities</a></li>
									<li class=""><a href="gallery.html">Gallery</a></li>
									<li class=""><a href="map.html">Map</a></li>
									<li class=""><a href="book-start.html">Book</a></li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header --><div class="row">
	<div class="span12">	
		<br /><br />
		<h1>Special offers</h1><br />
	</div>
	<div class="span3">
		
		<form class="form-inline mini" />
			<div class="row">
				<div class="span3">
					<h4>When would you like to stay with us?</h4>

					<div class="row">
						<div class="span3">							  
							<div class="control-group">
								<label for="focusedInput" class="control-label">Arrive</label>
								<div class="controls">
									<input type="text" class="span2 global-datepicker-from check-in-date" value="" />	
									<a href="#" id="global-datepicker-from"><i class="icon-calendar"></i></a>
								</div>
							</div>
						</div>

						<div class="span3 ">	
							<div class="control-group">
								<label for="focusedInput" class="control-label">Depart</label>
								<div class="controls">
									<input type="text" class="span2 global-datepicker-to check-out-date" value="" />
									<a href="#" id="global-datepicker-to"><i class="icon-calendar"></i></a>
								</div>
							</div>		
						</div>		
					</div>	

					<a class="btn btn-primary btn-large book-now" href="book-start.html">Check availability</a>

					
				</div>
			</div>

		</form>
	</div>
	
	<div class="span9 promotions">	
		
		<div class="row">
			<div class="span3">
				<img alt="" src="css/images/location.jpg" />
			</div>	 
			
			<div class="span6">
				<h3><span>Save 15-40%</span> at BootstrapHotel resort</h3>
				<p>Book your stay by January 31, and save 15-40% on weekend stays through December 31, at participating Hotels and Resorts.</p>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="span3">
				<img alt="" src="css/images/services.png" />
			</div>	 
			
			<div class="span6">
				<h3><span>FREE</span> Breakfast, <span>FREE</span> Internet, <span>FREE</span> Tour</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae hendrerit odio. Nam sit amet mi pretium nulla cursus euismod. Pellentesque non nisl quis erat blandit egestas.</p>
			</div>
		</div>
		<hr />				
		<div class="row">
			<div class="span3">
				<img alt="" src="css/images/promotions.png" />
			</div>	 
			
			<div class="span6">
				<h3>Stay five nights and get <span>one night FREE!</span></h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae hendrerit odio. Nam sit amet mi pretium nulla cursus euismod. Pellentesque non nisl quis erat blandit egestas.</p>			</div>
			</div>
			<hr />
			<div class="row">
				<div class="span3">
					<img alt="" src="css/images/rooms.jpg" />
				</div>	 
				
				<div class="span6">
					<h3><span>Save 20% OFF</span> by booking with us in advance.</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae hendrerit odio. Nam sit amet mi pretium nulla cursus euismod. Pellentesque non nisl quis erat blandit egestas.</p>			</div>
				</div>
				<br /><br />
				
			</div>
			
		</div></div> <!-- /container -->

<footer>
	<div class="container">
	<div class="row footer_section_pre">

	<div class="span4">
		<h4>Bootstrap Hotel<span class="line"></span></h4>

		<p>2247 Copperhead Road, Hartford, CT 06103</p>
		<p>Tel: +860-631-7795<br />Fax: +860-631-7796  <br />Email: admin@appsarea.com  </p>

		<ul data-facebook-action="recommend" data-url="#" class="socialcount socialcount-small recommend grade-a">
			<li class="facebook"><a title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=#"><span class="social-icon icon-facebook"></span><span class="count"></span></a></li>
			<li class="twitter"><a title="Share on Twitter" href="https://twitter.com/intent/tweet?text=#"><span class="social-icon icon-twitter"></span><span class="count"></span></a></li>
			<li class="googleplus"><a title="Share on Google Plus" href="https://plus.appsarea.com/share?url=#"><span class="social-icon icon-googleplus"></span><span class="count"></span></a></li>
		</ul>
		<br />
		<p class="copy">All content &copy; 2013 <a href="http://appsarea.com/">AppsArea</a></p>

	</div>
	<div class="span4">
		<h4>Special offers<span class="line"></span></h4>
		<p><b>FREE</b> Breakfast, <b>FREE</b> Internet, <b>FREE</b> Tour = Savings!</p>
		<p>Stay five nights and get one night totally <b>FREE</b>!</p>
		<p>Save up to <b>20% OFF</b> our Best Available Rate by booking with us in advance.</p>
	</div>
	<div class="span4">
		<h4>Sponsors<span class="line"></span></h4>
		    <ul class="thumbnails">
				<li class="span2">
					<div class="thumbnail">
						<img src="css/images/airlines/virgin4.gif" alt="" />
					</div>
				</li>				
				<li class="span2">
					<div class="thumbnail">
						<img src="css/images/airlines/ba2.gif" alt="" />
					</div>
				</li>				
				<li class="span2">
					<div class="thumbnail">
						<img src="css/images/airlines/delta3.gif" alt="" />
					</div>
				</li>										
				<li class="span2">
					<div class="thumbnail">
						<img src="css/images/airlines/ac_white.jpg" alt="" />
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