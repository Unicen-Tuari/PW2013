<?php
class Modelpanel
{
	private $host = "localhost";
	private $db = "autosBD";
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
	
	
	public function consultaAuto(){

		$sql = "SELECT * FROM auto";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>