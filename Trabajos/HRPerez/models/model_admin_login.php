<?php

class Model
{
    public $conn;
    
    	public function __construct(){

		//Configuración
		$host   = "localhost";
		$db = "tecper";
		$user = "root";
		$pass = "";

		//Conexión
		try{

		$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
		  die('Error de conexion, Mensaje: ' -$pe->getMessage());
		}
	}

    public function verificaAdmin($administrador){

		//$sql = "SELECT usuario, password FROM administrador WHERE usuario =".$administrador["usuario"] 
		//AND password =".$administrador["password"]";

			 $resultado = $this->conn->prepare($sql);
			 $resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;
	}
}

?>




