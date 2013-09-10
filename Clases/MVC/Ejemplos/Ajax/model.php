<?php
class Model
{
	private $host = "localhost";
	private $db = "ajax";
	private $user = "root";
	private $pass = "";
	private $conn;
    
	
    public function __construct(){
        try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
    }
	
	public function getNombresPersonas(){
	
		$sql = "SELECT DISTINCT Nombre FROM persona";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getPersonasPorNombre($nombre){
		$sql = "SELECT * FROM  `persona` WHERE Nombre =  '".$nombre."'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>