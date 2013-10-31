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
									<span class="name">Administrador</span>
								</div> </a>
								<ul class="dropdown-menu">
									<li class="dropdown-menu-title">

									</li>

									<li>
										<a href="index.php"><i class="icon-off"></i> Cerrar Sesión</a>
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
						<div class="box span12">
							<div class="box-header" data-original-title="">
								<h2><i class="icon-user"></i><span class="break"></span>Habitaciones</h2>

							</div>
							<div class="box-content">
								<table class="table table-striped table-bordered bootstrap-datatable datatable">
									<thead>
										<tr>
											<th>Username</th>
											<th>Date registered</th>
											<th>Role</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Anton Phunihel</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Alphonse Ivo</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Thancmar Theophanes</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>

										</tr>
										<tr>
											<td>Walerian Khwaja</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Clemens Janko</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Chidubem Gottlob</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Hristofor Sergio</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Tadhg Griogair</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Pollux Beaumont</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Adam Alister</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Carlito Roffe</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Sana Amrin</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Adinah Ralph</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center"><span class="label">Inactive</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Dederick Mihail</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center"><span class="label">Inactive</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Hipólito András</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Fricis Arieh</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Scottie Maximilian</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Bao Gaspar</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Tullio Luka</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Felice Arseniy</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center"><span class="label">Inactive</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Finlay Alf</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center"><span class="label">Inactive</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Theophilus Nala</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Sullivan Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Kristóf Filiberto</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Kuzma Edvard</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-success">Active</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Bünyamin Kasper</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Crofton Arran</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center"><span class="label label-important">Banned</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Bernhard Shelah</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center"><span class="label">Inactive</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Grahame Miodrag</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Innokentiy Celio</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Kostandin Warinhari</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
										<tr>
											<td>Ajith Hristijan</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center"><span class="label label-warning">Pending</span></td>
											<td class="center"><a class="btn btn-success" href="#"> <i class="icon-zoom-in "></i> </a><a class="btn btn-info" href="#"> <i class="icon-edit "></i> </a><a class="btn btn-danger" href="#"> <i class="icon-trash "></i> </a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><!--/span-->

					</div><!--/row-->

				</div>
				<!-- end: Content -->

			</div><!--/fluid-row-->

			<footer>
				<p>
					<span style="text-align:left;float:left">&copy; 2013 creativeLabs</span>
					<span class="hidden-phone" style="text-align:right;float:right">Dante Omar</span>
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
		<script src="js/jquery.cookie.js"></script>
		<script src='js/fullcalendar.min.js'></script>
		<script src='js/jquery.dataTables.min.js'></script>
		<script src="js/excanvas.js"></script>
		<script src="js/jquery.flot.js"></script>
		<script src="js/jquery.flot.pie.js"></script>
		<script src="js/jquery.flot.stack.js"></script>
		<script src="js/jquery.flot.resize.min.js"></script>
		<script src="js/jquery.flot.time.js"></script>

		<script src="js/jquery.elfinder.min.js"></script>
		<script src="js/jquery.raty.min.js"></script>
		<script src="js/jquery.iphone.toggle.js"></script>
		<script src="js/jquery.uploadify-3.1.min.js"></script>
		<script src="js/jquery.gritter.min.js"></script>
		<script src="js/jquery.imagesloaded.js"></script>
		<script src="js/jquery.masonry.min.js"></script>
		<script src="js/jquery.knob.modified.js"></script>
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