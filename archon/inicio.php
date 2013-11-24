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
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
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
	<div class="frame">
		<div class="sidebar">
			<div class="wrapper">

				<!-- Replace the src of the image with your logo -->
				<a href="inicio.php" class="logo"><img src="images/menu.png" alt="" style="width:240px;height:100px;" /></a>
				<ul class="nav  nav-list">
					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Sistema de administración</li>
					<li><a href="inicio.php"><i class="icon-home"></i>Inicio </a></li>
					<li><a href="clientes.php"><i class="icon-group"></i>Clientes</a></li>
					<li><a href="habitaciones.php"><i class="icon-hospital"></i>Habitaciones</a></li>
					<li><a href="reservaciones.php"><i class="icon-calendar"></i>Reservaciones</a></li>
					<li><a href="administradores.php"><i class="icon-user"></i>Administradores</a></li>
				</ul>
			</div><!-- /Wrapper -->
		</div><!-- /Sidebar -->
		<!-- Main content starts here-->
		<div class="content">
			<div class="navbar">
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar"><i class="icon-th"></i></a>
				<a class="navbar-brand" href="inicio.php">Panel</a>

				<!-- Top right user menu -->
				<ul class="nav navbar-nav user-menu pull-right">
					<!-- First nav user item -->
					<li class="dropdown user-name">
						<a class="dropdown-toggle" data-toggle="dropdown"><img src="images/menu.png" style="width:35px;height:35px;" class="user-avatar" alt="" /><?php echo $usuario;?></a>
							<ul class="dropdown-menu right inbox user">
								<li class="user-avatar">
									<img src="images/menu.png" style="width:30px;height:30px;" class="user-avatar" alt="" />
									<?php echo $usuario;?>
								</li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li><!-- / dropdown -->				
				</ul><!-- / Top right user menu -->
			</div><!-- / Navbar-->
			<div id="main-content">
				<div class="row">
					<div class="col-mod-12">
						
					</div>
				</div>

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
				<div class="row">
					<div class="col-md-3">
						<div class="web-stats success">
							<div class="pull-left">
								<h5>23</h5>
								<span class="description"><a href="clientes.php">Clientes</a></span>
							</div>
							<span class="pull-right  mini-graph success"></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="web-stats info">
							<div class="pull-left">
								<h5>38</h5>
								<span class="description"><a href="habitaciones.php">Habitaciones</a></span>
							</div>
							<span class=" pull-right   mini-graph info"></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="web-stats danger">
							<div class="pull-left">
								<h5>14</h5>
								<span class="description"><a href="reservaciones.php">Reservaciones</a></span>
							</div>
							<span class=" pull-right  mini-graph danger"></span>.
						</div>
					</div>
				</div>
			</div><!-- /Main Content  @7 -->

		</div><!-- / Content @5 -->

		<div class="row footer">
			<div class="col-md-12 text-center">
				© 2013 <a href="#">DJLabs</a>
			</div>
		</div>
	</div> <!-- Frame -->


	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.8.3.min.js"></script>
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
	

	<!-- Archon JS =============================-->
	<script src="js/archon.js"></script>
	
	<script src="js/sparkline-custom.js"></script>
	<script src="js/dashboard-custom.js"></script>
</body>
</html>
