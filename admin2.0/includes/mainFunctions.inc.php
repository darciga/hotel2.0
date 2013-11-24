<?php

// Constantes conexión con la base de datos
define("server", 'localhost');
define("user", 'root');
define("pass", '');
define("mainDataBase", 'tutosWeb');

// Variable que indica el status de la conexión a la base de datos
$errorDbConexion = false;


// Función para extraer el listado de usurios
function consultaUsers($linkDB){

	$statusTipo = array("Activo" => "btn-success",
						"Suspendido" => "btn-warning");

	$salida = '';

	$consulta = $linkDB -> query("SELECT id_user,usr_nombre,usr_puesto,usr_nick,usr_status
								  FROM tbl_usuarios ORDER BY usr_nombre ASC");

	if($consulta -> num_rows != 0){
		
		// convertimos el objeto
		while($listadoOK = $consulta -> fetch_assoc())
		{
			$salida .= '
				<tr>
					<td>'.$listadoOK['usr_nombre'].'</td>
					<td>'.$listadoOK['usr_puesto'].'</td>
					<td>'.$listadoOK['usr_nick'].'</td>
					<td class="centerTXT"><span class="btn btn-mini '.$statusTipo[$listadoOK['usr_status']].'">'.$listadoOK['usr_status'].'</span></td>
					<td class="centerTXT"><a data-accion="editar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Editar</a> <a data-accion="eliminar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Eliminar</a></td>
				<tr>
			';
		}

	}
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="5" class="centerTXT">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}

	return $salida;
}

// Verificar constantes para conexión al servidor
if(defined('server') && defined('user') && defined('pass') && defined('mainDataBase'))
{
	// Conexión con la base de datos
	
	$mysqli = new mysqli(server, user, pass, mainDataBase);
	
	// Verificamos si hay error al conectar
	if (mysqli_connect_error()) {
	    $errorDbConexion = true;
	}

	// Evitando problemas con acentos
	$mysqli -> query('SET NAMES "utf8"');
}


?>