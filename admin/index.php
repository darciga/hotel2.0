<?php 
session_start();
if(isset($_SESSION['id']))
{
	$var=$_SESSION["id"];
}
else {
	$var=0;
}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Inicio de Sesión</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="css/style.min.css" rel="stylesheet" />
		<link href="css/style-responsive.min.css" rel="stylesheet" />
		<link href="css/retina.css" rel="stylesheet" />

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
		<div class="container-fluid-full">
			<div class="row-fluid">

				<div class="row-fluid">
					<div class="login-box">
						<h2>Inicia Sesión</h2>
						<form class="form-horizontal" action="valida.php" method="Post" enctype="multipart/form-data" />
						<fieldset>

							<input class="input-large span12" name="usuario" id="user" type="text" placeholder="nombre de usuario..." required/>

							<input class="input-large span12" name="contraseña" id="pass" type="password" placeholder="tu contraseña..." required />

							<div class="clearfix"></div>

							<button type="submit" class="btn btn-primary span12">
								Inicia Sesión
							</button>
						</fieldset>

						</form>
						<hr />
						<?php
						if ($var==-1) {
							echo '<div class="alert alert-error">';
  							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  							echo '<h4>Error!</h4> al ingresar tus datos...</div>';
						
							
						}
						
						?>

					</div>
				</div><!--/row-->

			</div><!--/fluid-row-->

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

		<script src="js/jquery.chosen.min.js"></script>
		<script src="js/jquery.uniform.min.js"></script>
		<script src="js/jquery.cleditor.min.js"></script>
		<script src="js/jquery.noty.js"></script>
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