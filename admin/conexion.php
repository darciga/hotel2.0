<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
Class conexion {

    private $servidor='localhost';
    private $usuario='root';
    private $password='';
    private $base_datos='sistema_reservacion';
    
	private $conexcion;
	public $error;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    public function __construct($servidor,$usuario,$password,$base_datos) {
        $this->servidor=$servidor;
		$this->usuario=$usuario;
		$this->password=$password;
		$this->base_datos=$base_datos;
		
		if(!$this->_connect()){
			$this->error=mysql_error();
		}
		
    }
	private function _connect(){
		$this->conexcion=mysql_connect($this->servidor,$this->usuario,$this->password);
		if($this->conexcion){
			mysql_select_db($this->base_datos);
			
		}
		else {
			$this->error=mysql_error();
			return FALSE;
		}
	}

   
}
?>