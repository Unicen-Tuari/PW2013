<?php
class LoginModel
{
	private $host = "localhost";
	private $db = "session";
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
	
	public function getUsuario($mail){
		$sql = "Select * from usuario where Mail = '$mail'";
		$query = $this->conn->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
	
}
?>