<?php
include('../includes/conexion.php');
session_start();
$usuario=$_SESSION['nombre'];
$conectar=Conectarse();
$consulta="SELECT id_cliente FROM clientes";
$resultado=mysql_query($consulta,$conectar);
$numero_clientes = mysql_num_rows($resultado);
$sql = "SELECT id_reservacion FROM reservaciones";
$resultado=mysql_query($sql,$conectar);
$num_re=mysql_num_rows($resultado);
$sql = "SELECT * FROM habitaciones WHERE estado like 'desocupada%'";
$resultado=mysql_query($sql,$conectar);
$num_hab=mysql_num_rows($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sistema de reservaciones</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Stylesheets -->    
	<link href="css/archon.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/prettify.css" rel="stylesheet">

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
	<!-- Frame comienzo -->
	<div class="frame">
		<!-- Sidebar comienzo -->
		<div class="sidebar">
			<!-- Wrapper comienzo -->
			<div class="wrapper">
				<!-- Navbar comienzo -->
				<ul class="nav  nav-list">
					<!-- Replace the src of the image with your logo -->
					<a href="index.html" class="logo"><img src="images/logo.png" alt="Archon Admin" /></a>
								
					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Pages</li>
					<li><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
					<li><a href="gallery.html"><i class="icon-picture"></i>Gallery</a></li>
					<li><a href="login.html"><i class="icon-signin"></i>Login</a></li>
					<li> <!-- Example for second level menu -->
						<a class="dropdown" href="#"><i class="icon-user"></i> Profile <span class="label">2</span></a>
						<ul>
							<li><a href="profile.html"><i class="icon-usre"></i> Model One</a></li>
							<li><a href="profileTwo.html"><i class="icon-usre"></i> Model Two</a></li>
						</ul>	
					</li>
					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Components</li>
					<li><a href="tables.html"><i class="icon-table"></i>Tables</a></li>
					<li> <!-- Example for second level menu -->
						<a class="dropdown" href="#"><i class="icon-folder-close-alt"></i> Charts <span class="label">3</span></a>
						<ul>
							<li><a href="nvd.html"><i class="icon-hdd"></i> NVD</a></li>
							<li><a href="flot.html"><i class="icon-coffee"></i>Flot</a></li>
							<li><a href="knobs.html"><i class="icon-coffee"></i>Knobs</a></li>
						</ul>	
					</li>
					<li><a href="typography.html"><i class="icon-text-width"></i>Typography</a></li>
					<li>
						<a class="dropdown" href="forms.html"><i class="icon-list-alt"></i>Forms  <span class="label">4</span></a>
						<ul>
							<li><a href="form-elements.html"><i class="icon-indent-right"></i> Form Elements</a></li>
							<li><a href="forms.html"><i class="icon-indent-left"></i>Forms</a></li>
							<li><a href="form-wizard.html"><i class="icon-coffee"></i>Form wizard</a></li>
							<li><a href="file-uploads.html"><i class="icon-indent-right"></i> File Upload</a></li>
						</ul>	
					</li>
					<li><a href="icons.html"><i class="icon-truck"></i>Icons</a></li>
				</ul><!-- Navbar fin -->

			</div><!-- wrapper fin -->
		</div><!-- Sidebar fin -->
		<!-- Main content starts here-->
		<div class="content">
			<!-- Main navbar starts here-->
			<div class="navbar">
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar"><i class="icon-list"></i></a>
				<a class="navbar-brand" href="inicio.php">Archon</a>
				<ul class="nav navbar-nav user-menu pull-right">
					<li class="dropdown user-name">
						<a class="dropdown-toggle" data-toggle="dropdown"><img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />Vijay Kumar</a>
							<ul class="dropdown-menu right inbox user">
								<li class="user-avatar">
									<img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />
									Vijay Kumar
								</li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li><!-- / dropdown -->				
				</ul><!-- / Top right user menu -->
			</div><!-- Main navbar ends here-->
			<!--Otro main-content inicia-->
			<div id="main_content">
				
				
				<div class="row">
					<div class="col-md-9">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<div class="panel-body"></div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title"></h3>
							</div>
							<div class="panel-body">

							</div>
						</div>
					</div>
				</div>
				<!-- Graph -->
				
					<div class="col-md-12 panel-heading">

						<div class="col-md-3">
						<div class="web-stats success">
							<div class="pull-left">
								<h5>2344 </h5>
								<span class="description">Unique Views</span>
							</div>
							<span class="pull-right  mini-graph success"></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="web-stats info">
							<div class="pull-left">
								<h5>$ 2,69,344 </h5>
								<span class="description">Month Sales</span>
							</div>
							<span class=" pull-right   mini-graph info"></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="web-stats danger">
							<div class="pull-left">
								<h5>2344 </h5>
								<span class="description">Returns</span>
							</div>
							<span class=" pull-right  mini-graph danger"></span>.
						</div>
					</div>

					</div>
					
				

				
				
			</div><!--Fin del otro main-content-->
		</div><!-- Main content ends here-->
		<div class="row footer">
			<div class="col-md-12 text-center">
				© 2013 <a href="#">DJLabs</a>
			</div>
		</div>
	</div><!-- frame fin -->
	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/bootstrap-switch.js"></script>
	<script src="js/jquery.tagsinput.js"></script>
	<script src="js/jquery.placeholder.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	<script src="js/application.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.sortable.js"></script>
	<script type="text/javascript" src="js/jquery.gritter.js"></script>

	<!-- Charts  =============================-->
	<script src="js/charts/jquery.flot.js"></script>
	<script src="js/charts/jquery.flot.resize.js"></script>
	<script src="js/charts/jquery.flot.stack.js"></script>
	<script src="js/charts/jquery.flot.pie.min.js"></script>	
	<script src="js/charts/jquery.sparkline.min.js"></script>	
	<script src="js/jquery.knob.js"></script>

	<!-- Archon JS =============================-->
	<script src="js/archon.js"></script>
	<script src="js/knobs-custom.js"></script>
	<script src="js/sparkline-custom.js"></script>
	<script src="js/dashboard-custom.js"></script>
</body>
</html>
