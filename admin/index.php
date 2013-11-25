<?php
session_start();
if (isset($_SESSION['id'])) {
	$var = $_SESSION["id"];
} else {
	$var = 0;
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
						if ($var == -1) {
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

		<!-- end: JavaScript-->

	</body>
</html>