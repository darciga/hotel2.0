<?php
    class conexion
    {
    	private $servidorbd;
		private $based;
		private $numreg;
		private $usuario;
		private $contrasena;
		private $conn;
		private $res_proced;//resultado de la consulta en forma de arreglo de un procedimiento
		private $res_consul;//resultado en forma de arreglo de una consulta
    	
    	//constructor
    	function conexion($srv,$usr,$cve,$bd)
		{
			$this->res_proced = array();
			$this->servidorbd = $srv;
			$this->usuario = $usr;
			$this->contrasena = $cve;
			$this->based = $bd;
			$this->numreg = -1; //no se a afectado nada
		
			try
			{
				if( !( $this->conn = @mysqli_connect($this->servidorbd,$this->usuario,$this->contrasena,$this->based) ) )
					throw new Exception('Error al conectarse al servidor '.$srv.'.<br>');
				/*else
					echo "Conexion correcta...<br>";*/
			}
			catch(Exception $e)
			{
				die ($e->getMessage()."  ".mysqli_connect_error() );
			}
		}
		function ejecutar($sql)
		{
			$res=$this->conn->multi_query($sql);
			$this->res_proced=array();
			if($res)
			{
				$fila=0;
				do{
					if($result=$this->conn->store_result())
					{
						while($row = $result->fetch_row())
						{
							$col=0;
							foreach ($row as $valor) 
							{
								$this->res_proced[$fila][$col]=$valor;
								$col++;								
							}
							$fila++;
						}
						$result->close();
					}
				}
				while(@$this->conn->next_result());
			}
			else 
			{
				die("Error al ejecutar la consulta ".$sql."<br/>");
			}
			return $this->res_proced;
			
		}
		function mostrar_sql()
		{
			for($r=0;$r<(count($this->res_proced)-1);$r++)
			{
				for($c=0;$c<count($this->res_proced[$r]);$c++)
					echo $this->res_proced[$r][$c]." ";
				echo "<br/>";	
			}		
		}
		function cerrar_con()
		{
			$this->conn->close();
		}


    }
?>