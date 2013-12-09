<?php
include ('../includes/conexion.php');
$idres = $_GET['idres'];
$conectar = Conectarse();
$consulta = "SELECT reservaciones.id_reservacion,reservaciones.checkin,reservaciones.checkout,
		reservaciones.estado,reservaciones.num_adu,reservaciones.num_ni,reservaciones.id_cliente,reservaciones.habitacion,
		 clientes.nombres as Cliente,habitaciones.nombre as Habitacion, tipohabitacion.nombre as nombret,
		 habitaciones.id_habitacion as IH FROM reservaciones,clientes,habitaciones,tipohabitacion
		 WHERE reservaciones.id_cliente=clientes.id_cliente
		 AND reservaciones.habitacion=habitaciones.id_habitacion
		 AND habitaciones.tipo=tipohabitacion.id_tipo AND reservaciones.id_reservacion='$idres' ";
//$consulta = "SELECT * FROM reservaciones where id_reservacion=$idres";
$resultado = mysql_query($consulta,$conectar);
if (mysql_num_rows($resultado)) {
	$array = mysql_fetch_array($resultado);
	$checkin = $array['checkin'];
	$checkout = $array['checkout'];
	$estado = $array['estado'];
	$num_adu = $array['num_adu'];
	$num_ni = $array['num_ni'];
	$id_cliente = $array['id_cliente'];
	$habitacion = $array['habitacion'];
	$cliente= $array['Cliente'];
	$Habitacion=$array['Habitacion'];
	$IH=$array['IH'];
	//header("Location:../index.php");
} else {
	echo "Error...";
	echo $resultado;
}
 ?>
 <!doctype html>
 <html lang="es">
 <head>
 	
 	<meta charset="utf-8" />
		<title>Editar Reservacion</title>
		<!-- end: Meta -->

		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- end: Mobile Specific -->
		<!-- start: CSS -->
		<link href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="css/style.min.css" rel="stylesheet" />
		<link href="css/style-responsive.min.css" rel="stylesheet" />
		<link href="css/retina.css" rel="stylesheet" />
		<link type="text/css" href="css/master.css" rel="stylesheet" />

		
		<!-- end: CSS -->

		<!-- start: JavaScript-->
		
		<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/dist/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/lib/jquery.metadata.js"></script>
		<script type="text/javascript" src="js/jquery-validation-1.10.0/localization/messages_es.js"></script>

 </head>
 <body>
 	<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</a>
					<a id="main-menu-toggle" class="hidden-phone open">
						<i class="icon-reorder"></i>
					</a>
					<div class="row-fluid">
						<a class="brand span2" href="inicio.php"><span>Hotel</span></a>
					</div>
					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">

							<li class="dropdown">
								<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="user">
									<span class="hello">Editar reservacion de</span>
									<span class="name"><?php //echo $id_reservacion; ?></span>
								</div> </a>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->

				</div>
			</div>
		</div>
		<div class="container-fluid-full">
			<div class="row-fluid">

				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li>
								<a href="reservaciones.php"><span class="hidden-tablet">Regresar</span></a>
							</li>

						</ul>
					</div>
				</div>
				<div id="content" class="span10">
					<div class="row-fluid">
						<div class="box span12">
							<div class="box-header">
								<h2><i class="icon-user"></i><span class="break"></span>Edicion</h2>

							</div>
							
							<div class="box-content">
								
				<div>
					<form action="editarReservacion.php?idres=<?php echo $idres;?>&IH=<?php echo $IH; ?>" method="post" id="formClientes" class="formClientes">
						<fieldset id="ocultos">
							<input type="hidden" name="idres" value"<?php echo $idres; ?>"/>
	 					<fieldset id="datosCliente">
	 						<p>Fecha de entrada</p>
							<span></span>
							<input type="text" id="" name="checkin" placeholder="Fecha de entrada" class="span3" value="<?php echo $checkin; ?>"  />
							<p>Fecha de salida</p>
							<span></span>
							<input type="text" id="" name="checkout" placeholder="Fecha de salida" class="span3" value="<?php echo $checkout; ?>"  />
							<p>Estado</p>
							<span></span>
							<select name="estado" value="" required>
											<option value="<?php echo $estado; ?>" /><?php echo $estado." (Actual)"; ?><option value="En espera"/>Espera<option value="Cancelada"/>Cancelada<option value="Tomada" />En Uso
										</select> </label>
							<p>Número de Adultos</p>
							<span></span>
							<input type="text" id="" name="num_adu" placeholder="Numero de Adultos" class="span3" value="<?php echo $num_adu; ?>"  />
							<p>Número de niños</p>
							<span></span>
							<input type="text" id="" name="num_ni" placeholder="Numero de Niños" class="span3" value="<?php echo $num_ni; ?>" />
							<p>Cliente</p>
							<span></span>
							<input type="text" id="" name="id_cliente" placeholder="Cliente" class="span3" value="<?php echo $cliente; ?>"/>
							<p>Habitacion</p>
							<span></span>
							<input type="text" id="" name="habitacion" placeholder="Habitacion" class="span3" value="<?php echo $Habitacion; ?>"  />
								<fieldset id="btnAgregar" style="text-align:center;">
								<input type="submit" id="continuar" value="Continuar" />
								</fieldset>
	 					</fieldset>
					</form>
				</div>
			</div>
						</div><!--/span-->

					</div><!--/row-->

				</div>
				<!-- end: Content -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/core.min.js"></script>
 </body>
 </html>