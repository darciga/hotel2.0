<?php
include ('../includes/conexion.php');
$conectar = Conectarse();
$idcli = $_GET['idcli'];
//$consulta = "SELECT nombres, apellidos, user, pass, email, tel, direccion,ciudad,cp, estado, pais FROM clientes WHERE id_cliente='$idcli' LIMIT 1";
//$resultado = mysql_query($consulta, $conectar);
/*
*
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
*/
//consulta para sacar los clientes y ponerlos en el selected
//mysql_free_result($combo);
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
									<span class="hello">Agregar reservacion</span>
									<span class="name"><?php //echo $nombres; ?></span>
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
								<a href="inicio.php"><span class="hidden-tablet">Regresar</span></a>
							</li>

						</ul>
					</div>
				</div>
				<div id="content" class="span10">
					<div class="row-fluid">
						<div class="box span8">
							<div class="box-header">
								<h2><i class="icon-user"></i><span class="break"></span>Edicion</h2>

							</div>
							
							<div class="box-content">
								
				<div>
					
					<form action="" method="post" id="formClientes" class="formClientes">
						<fieldset id="ocultos">
							<input type="hidden" name="id" value"<?php //echo $idcli; ?>"/>
	 					<fieldset id="datosCliente">
	 						<p>Cliente</p>
	 						<span></span>
							<label><?php 
							$consulta = " SELECT CONCAT( nombres,' ',apellidos ) as nombrec, id_cliente FROM clientes WHERE id_cliente='$idcli'";
							$res= mysql_query($consulta,$conectar);
							while ($nombre = mysql_fetch_array($res)) {
										# code...
								printf("%s",$nombre['nombrec']);
								$idcli2=$nombre['id_cliente'];
							}


							 ?></label>
							
							<p>Tipo</p>
							<span></span>
							<?php 
								if($_POST)
								{
									$consulta = "SELECT ";
									echo "Ya se envio la variable";
									$tipo=$_POST['id_hab'];
									$tipohabitacion;
									echo $tipo;
								}
								else{
									echo '<select name="id_hab" value="" class="span5" required><option value="null" />';
									$consulta = "SELECT id_tipo,nombre FROM tipohabitacion";
												$resultado = mysql_query($consulta,$conectar);
												while($combot = mysql_fetch_array($resultado))
											{

												printf("<option value='%s' />&nbsp;%s",$combot["id_tipo"],$combot["nombre"]);
											}
									
									
											
								}
							 ?>
							
											<!-- lleno el option con php -->
											<?php
												
											 ?>
							
										</select></br>
							<input type="submit" id="" onclick="this.form.action='reservacionesadd.php?idcli='$idcli' '" value="Seleccionar" class="btn btn-info" />
	 						<?php 
	 						if($_POST)
	 						{
	 							echo '<p>Habitacion</p>
							<span></span>
							<select name="id_hab" value="" class="span5" required>
											<option value="null" />';
											$consulta = "SELECT nombre,estado,id_habitacion FROM habitaciones WHERE estado='Desocupada'";
											$query= "SELECT tipohabitacion.id_tipo, tipohabitacion.nombre, tipohabitacion.precio, habitaciones.id_habitacion, habitaciones.tipo, habitaciones.estado
														FROM tipohabitacion, habitaciones
														WHERE tipohabitacion.id_tipo ='$tipo'
														AND habitaciones.tipo ='$tipo'
														AND habitaciones.estado = 'Desocupada'";
												$resultado = mysql_query($query,$conectar);
												while($combo = mysql_fetch_array($resultado))
											{
												
												printf("<option value='%s' />&nbsp;%s",$combo["id_habitacion"],$combo["nombre"]);
												$idh=$combo['id_habitacion'];
												echo $idh;
											}
											
											echo '</select> ';
	 						}
	 						else{
	 							
							echo '<p>Tienes que seleccionar el tipo de habitacion</p><span></span>';

	 						}
	 						 ?>
	 						
											<!-- lleno el option con php -->
					
							
										

							<p>Num. de adultos</p>
							<span></span>
							<input type="password" id="" name="pass" placeholder="Contraseña" class="span3" />
							<p>Num. de niños</p>
							<span></span>
							<input type="email" id="" name="email" placeholder="Correo electronico" class="span3" value="<?php //echo $email; ?>" />
							<p>Estado</p>
							<span></span>
							<input type="text" id="" name="tel" placeholder="Telefono" class="span3" value="<?php //echo $tel; ?>"/>
								<fieldset id="" style="text-align:center;">
								<input type="submit" id="" onclick="this.form.action='reservacionadd.php'" class="btn btn-success" value="Agregar" />
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