<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Stylesheets -->    
	<link href="css/demo.css" rel="stylesheet">
	<link href="css/archon.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

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
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar "><i class="icon-list"></i></a>
				<a class="navbar-brand" href="inicio.php">Panel</a>

				<!-- Top right user menu -->
				<ul class="nav navbar-nav user-menu pull-right">
					<!-- First nav user item -->
					<li class="dropdown user-name">
						<a class="dropdown-toggle" data-toggle="dropdown"><img src="images/menu.png" style="width:35px;height:35px;" class="user-avatar" alt="" />Administrador</a>
							<ul class="dropdown-menu right inbox user">
								<li class="user-avatar">
									<img src="images/menu.png" style="width:30px;height:30px;" class="user-avatar" alt="" />
									Administrador
								</li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li><!-- / dropdown -->				
				</ul><!-- / Top right user menu -->

			</div><!-- / Navbar-->

			<div id="main-content">
				<!-- Users widget -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-users">
							<div class="panel-heading">
								<h3 class="panel-title">Clientes
								</h3>
							</div>
							<div class="panel-body">
								<table class="table users-table table-condensed table-hover " >
									<thead>
										<tr>
											<th>Nombre</th>
											<th class="visible-lg">Usuario</th>
											<th>Correo</th>
											<th class="visible-lg">Telefono</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Dante Omar Arciga</td>
											<td class="visible-lg">dante</td>
											<td>dante.omar.arciga@gmail.com </td>
											<td class="visible-lg">3531208323</td>
											<td>
												<button type="button" class="btn btn-info"><i class="icon-trash"></i></button>
												<button type="button" class="btn btn-info"><i class="icon-edit"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	<!-- / Users widget-->
			</div><!-- /Main Content  @7 -->
		</div><!-- / Content @5 -->

						<div class="row footer">
							<div class="col-md-12 text-center">
								© 2013 <a href="#">DJLabs</a>
							</div>
						</div>
					</div> <!-- Frame -->


					<!-- Load JS here for greater good =============================-->
					<script src="js/jquery-1.8.3.js"></script>
					<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
					<script src="js/jquery.ui.touch-punch.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/bootstrap-select.js"></script>
					<script src="js/bootstrap-switch.js"></script>
					<script src="js/flatui-checkbox.js"></script>
					<script src="js/flatui-radio.js"></script>
					<script src="js/jquery.tagsinput.js"></script>
					<script src="js/jquery.placeholder.js"></script>
					<script src="js/bootstrap-typeahead.js"></script>
					<script src="js/application.js"></script>
					<script src="js/moment.min.js"></script>
					<script src="js/jquery.dataTables.min.js"></script>
					<script src="js/bootstrap-datatables.js"></script>
					<script src="js/jquery.sortable.js"></script>
					<script type="text/javascript" src="js/jquery.gritter.js"></script>
					<!-- Page scripts-->
					<script src="js/jquery.autosize.min.js"></script>
					<script src="js/bootstrap-wysiwyg.js"></script>
					<script src="js/bootstrap-colorpicker.js"></script>
					<script src="js/forms.js"></script>

					<!-- Archon JS =============================-->
					<script src="js/archon.js"></script>
</body>
</html>
