
<?php
include ('../includes/conexion.php');
$idhab = $_GET['idhab'];
$conectar = Conectarse();

$consulta = "SELECT nombre, tipo, estado,descripcion, imagen FROM habitaciones WHERE id_habitacion=$idhab";
$resultado = mysql_query($consulta, $conectar);
if (mysql_num_rows($resultado)) {
	$array = mysql_fetch_array($resultado);

	$nombre = $array['nombre'];
	$tipo = $array['tipo'];
	$estado = $array['estado'];
	$descripcion = $array['descripcion'];
	$imagen = $array['imagen'];
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
									<span class="name"><?php echo $nombre; ?></span>
								</div> </a>
							</li>
							<!-- end: User Dropdown -->
						</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid-full">
		<div class="row-fluid">
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a href="habitaciones.php"><span class="hidden-tablet">Regresar</span></a>
						</li>

					</ul>
				</div>
			</div>
			<div id="content">
				<div class="row-fluid">
					<div class="box span7">
						<div class="box-header">
							<h2><i class="icon-user"></i><span class="break"></span>Edicion</h2>
						</div>
						<div class="box-content">
						<!-- tabla de edicion-->
							<div>
                            	<form action="editarhabitacion.php?idhab=<?php echo $idhab; ?>" method="post" id="" class="">
                                    <fieldset id="ocultos">
                                        <input type="hidden" name="idhab" value"<?php echo $idhab; ?>"/>
                                            <fieldset id="datosHabitacion">
	                                            <p>Nombre</p>
	                                            <span></span>
	                                            <input type="text" id="" name="nombre" placeholder="Nombre" class="span3" value="<?php echo $nombre; ?>"  />
	                                            <p>Tipo</p>
	                                            <span></span>
	                                            <input type="text" id="" name="tipo" placeholder="Tipo" class="span3" value="<?php echo $tipo; ?>"  />
	                                            <p>Estado</p>
	                                            <span></span>
	                                            <select name="estado" value="" required>
	                                            <option value="<?php echo $estado; ?>" /><?php echo $estado." (Actual)"; ?><option value="Desocupada"/>Desocupada<option value="Ocupada"/>Ocupada<option value="Mantenimiento"/>Mantenimiento
	                                            </select>
	                                            <p>Descripcion</p>
	                                            <span></span>
	                                            <input type="text" id="" name="descripcion" placeholder="Descripcion" class="span3" value="<?php echo $descripcion?>"/>
	                                            <p>Imagen</p>
	                                            <span></span>
	                                            <input type="text" id="" name="imagen" placeholder="Imagen" class="span3" value="<?php echo $imagen; ?>" />
	                                            <br>
	                                            <input type="submit" id="continuar" value="Modificar" class="btn btn-info" />
	                                           
                                            </fieldset>
                                   </fieldset>
                                </form>
                            </div><!-- fin de div de la tabla de edicion -->

						</div>
					</div><!--/span-->
			</div><!--/row-->			
		</div>
		</div>
	</div>


	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/core.min.js"></script>
</body>
</html>

