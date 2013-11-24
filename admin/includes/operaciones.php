<?php
// Script para ejecutar AJAX

// Insertar y actualizar tabla de usuarios
sleep(2);

// Inicializamos variables de mensajes y JSON
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";

// Incluimos el archivo de funciones y conexión a la base de datos
include('../includes/conexion.php');
/*
$statusTipoOK = array("Activo" => "btn-success",
					  "Suspendido" => "btn-warning");

// Validar conexión con la base de datos
if($errorDbConexion == false){
	// Validamos qe existan las variables post
	if(isset($_POST) && !empty($_POST)){
		// Verificamos las variables de acción
		switch ($_POST['accion']) {
			case 'addCli':
				// Armamos el query
				$query = sprintf("INSERT INTO clientes
								 SET nombre_cli='%s', user='%s', usr_nick='%s', pass='%s',email='%s',tel='%s'",
								 $_POST['nombre_cli'],$_POST['username'],$_POST['pass'],$_POST['email'],$_POST['tel']);

				// Ejecutamos el query
				$resultadoQuery = $mysqli -> query($query);


				// Obtenemos el id de user para edición
				$id_userOK = $mysqli -> insert_id;

				if($resultadoQuery == true){
					$respuestaOK = true;
					$mensajeError = "Se ha agregado el registro correctamente";
					$contenidoOK = '
					<tr>
						<td class="center">'.$_POST['nombre_cli'].'</td>
						<td class="center">'.$_POST['user'].'</td>
						<td class="center">'.$_POST['email'].'</td>
						<td class="center">'.$_POST['tel'].'</td>
						<td class="center"><a data-accion="editar" class="btn btn-info" href="'.$id_userOK.'">
						<i class="icon-edit "></i></a><a data-accion="eliminar" class="btn btn-danger" href="'.$id_userOK.'">
						<i class="icon-trash "></i></a></td>
					</tr>
					';

				}
				else{
					$mensajeError = "No se puede guardar el registro en la base de datos";
				}

			break;
			
			case 'editUser':
				// Armamos el query
				$query = sprintf("UPDATE tbl_usuarios
								 SET usr_nombre='%s', usr_puesto='%s', usr_nick='%s', usr_status='%s'
								 WHERE id_user=%d LIMIT 1",
								 $_POST['usr_nombre'],$_POST['usr_puesto'],$_POST['usr_nick'],$_POST['usr_status'],$_POST['id_user']);

				// Ejecutamos el query
				$resultadoQuery = $mysqli -> query($query);

				// Validamos que se haya actualizado el registro
				if($mysqli -> affected_rows == 1){
					$respuestaOK = true;
					$mensajeError = 'Se ha actualizado el registro correctamente';

					$contenidoOK = consultaUsers($mysqli);

				}else{
					$mensajeError = 'No se ha actualizado el registro';
				}


			break;
			case 'eliminar':
				// Armamos el query
				$query = sprintf("DELETE FROM tbl_usuarios
								 WHERE id_user=%d LIMIT 1",
								 $_POST['id_user']);

				// Ejecutamos el query
				$resultadoQuery = $mysqli -> query($query);

				// Validamos que se haya actualizado el registro
				if($mysqli -> affected_rows == 1){
					$respuestaOK = true;
					$mensajeError = 'Se ha actualizado el registro correctamente';

					$contenidoOK = consultaUsers($mysqli);

				}else{
					$mensajeError = 'No se ha eliminado el registro';
				}
			break;

			default:
				$mensajeError = 'Esta acción no se encuentra disponible';
			break;
		}
	}
	else{
		$mensajeError = 'No se puede ejecutar la aplicación';
	}


}
else{
	$mensajeError = 'No se puede establecer conexión con la base de datos';
}
*/

// Armamos array para convertir a JSON
$salidaJson = array("respuesta" => $respuestaOK,
					"mensaje" => $mensajeError,
					"contenido" => $contenidoOK);

echo json_encode($salidaJson);
?>