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

    public function insertarTag($tag){

		$sql = "INSERT INTO `tag` (`nombre_tag`,`descripcion`) VALUES (:nombre_tag,:descripcion)";
		
			$resultado = $this->conn->prepare($sql);
         	 $resultado->execute(array(':nombre_tag'=>$tag["nombre_tag"],':descripcion'=>$tag["descripcion"]));
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;
	}
}

?>




