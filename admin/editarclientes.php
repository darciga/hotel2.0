<?php
include ('../includes/conexion.php');
$idcli = $_GET['idcli'];
$conectar = Conectarse();

$consulta = "SELECT nombres, apellidos, user, pass, email, tel, direccion,ciudad,cp, estado, pais FROM clientes WHERE id_cliente='$idcli' LIMIT 1";
$resultado = mysql_query($consulta, $conectar);
if (mysql_num_rows($resultado)) {
	$array = mysql_fetch_array($resultado);

	$nombres = $array['nombres'];
	$apellidos = $array['apellidos'];
	$user = $array['user'];
	$pass = $array['pass'];
	$email = $array['email'];
	$tel = $array['tel'];
	$direccion = $array['direccion'];
	$ciudad = $array['ciudad'];
	$cp = $array['cp'];
	$estado = $array['estado'];
	$pais = $array['pais'];
	//header("Location:../index.php");
} else {
	echo "Error...";
}
 ?>
 <!doctype html>
 <html lang="es">
 <head>
 	
 	<meta charset="utf-8" />
		<title>Editar Usuario</title>
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
									<span class="hello">Editar cuenta de</span>
									<span class="name"><?php echo $nombres; ?></span>
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
								<a href="clientes.php"><span class="hidden-tablet">Regresar</span></a>
							</li>

						</ul>
					</div>
				</div>
				<div id="content">
					<div class="row-fluid">
						<div class="box span8">
							<div class="box-header">
								<h2><i class="icon-user"></i><span class="break"></span>Edicion</h2>
							</div>
							
							<div class="box-content">
							
								<form action="editarcliente.php?idcli=<?php echo $idcli; ?>" method="post" id="" class="formClientes">
									<fieldset id="ocultos">
										<input type="hidden" name="idcli" value"<?php echo $idcli; ?>"/>
									</fieldset>
				 					<fieldset id="">
				 						<div class="span4">
				 							<p>Nombres</p>
										<span></span>
										<input type="text" id="" name="nombres" placeholder="Nombres" value="<?php echo $nombres; ?>"  />
				 						</div>
				 						<div class="span4">
											<p>Apellidos</p>
										<span></span>
										<input type="text" id="" name="apellidos" placeholder="Apellidos" class="" value="<?php echo $apellidos; ?>"  />
										</div>
										<div class="span4">
											<p>Nombre de Usuario</p>
										<span></span>
										<input type="text" id="" name="user" placeholder="Nombre de usuario" class="" value="<?php echo $user; ?>" />
										</div>
										
										<div class="span4">
											<p>Correo Electronico</p>
										<span></span>
										<input type="email" id="" name="email" placeholder="Correo electronico" class="" value="<?php echo $email; ?>" /></div>
										<div class="span4">
											<p>Telefono</p>
										<span></span>
										<input type="text" id="" name="tel" placeholder="Telefono" class="" value="<?php echo $tel; ?>"/></div>
										<div class="span4">
											<p>Dirección</p>
										<span></span>
										<input type="text" id="" name="direccion" placeholder="Direccion" class="" value="<?php echo $direccion; ?>"  /></div>
										<div class="span4">
											<p>Ciudad</p>
										<span></span>
										<input type="text" id="" name="ciudad" placeholder="Ciudad" class="" value="<?php echo $ciudad; ?>" /></div>
										<div class="span4">
											<p>Codigo postal</p>
										<span></span>
										<input type="text" id="" name="cp" placeholder="Codigo postal" class="" value="<?php echo $cp; ?>"  /></div>
										<div class="span4">
											<p>Estado</p>
										<span></span>
										<input type="text" id="" name="estado" placeholder="Estado" class="" value="<?php echo $estado; ?>"  /></div>
										<div class="span4">
											<p>Pais</p>
										<span></span>
										<input type="text" id="" name="pais" placeholder="Pais" class="" value="<?php echo $pais; ?>"/>
											
										<input type="submit" id="continuar" value="Continuar" class="btn btn-info" />
											
										</div>
				 					</fieldset>
								</form>
						
							</div>
						</div><!--/span-->

					</div><!--/row-->

				</div>
			</div>
		</div>
				<!-- end: Content -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/core.min.js"></script>
 </body>
 </html>