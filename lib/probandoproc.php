
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Inicio de sesion</title>
		<meta name="description" content="">
		<meta name="author" content="Dante Omar">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	</head>

	<body>
		<div>
			<header>
				<h1>Pagina1</h1>
			</header>
			<div>
				
				<form action="validar.php" method="post" accept-charset="utf-8">
					<fieldset style="border-radius:2px; width: 20%;">
					<legend>Ingresa los datos</legend>
					<label>Usuario:</label>
					<br />
					<input name="usuario" type="text"  />
					<br />
					<br />		  
					<label>Contraseña:</label>
					<br />
					<input name="contraseña" type="password"/>
					<br />	
					<br />		
					<input type="submit" name"ingresar" value="Ingresar &rarr;"/>
					</fieldset>
				</form>	
			
			
					
		</div>
	</body>
</html>
