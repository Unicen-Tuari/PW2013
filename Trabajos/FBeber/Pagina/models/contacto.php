<?php
	class Model
	{ 
		private $conn;
	    public function __construct()
	    {
	    	include ('./conexion.php');
	    	try
			{
				$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
			}
			catch(PDOException $pe)
			{
				die('Error de conexion, Mensaje: ' .$pe->getMessage());
			}
	    }
		public function obtenerInformacion()
		{	
			$sql = "SELECT * FROM informacion";
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			print_r ($resultado['calle'].$resultado['numero'].' | '.$resultado['localidad'].$resultado['provincia'].' | '.$resultado['telefono'].' / '.$resultado['movil'].' | '.$resultado['mail']);
			
		}
	}
?>
