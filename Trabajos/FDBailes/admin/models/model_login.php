<?php
class Modellogin
{ 
	private $conn;
	
	public function __construct()
	{
		include ('../variables_conexion.php');
		try
		{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
	}
	public function getUsuario($username){
		$sql = "SELECT * FROM USUARIO WHERE username = '$username'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}	
}
?>