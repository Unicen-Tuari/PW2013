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
	
	
	public function consultaAuto($id){

		$sql = "SELECT a.titulo, a.id, m.nombre FROM auto a JOIN marca m ON (a.id_marca = m.id) WHERE a.id_usuario = $id";
		$q = $this->conn->prepare($sql);
		$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);

	}
	public function consultaUser($id){

		$sql = "SELECT nombre FROM usuario where id = $id ";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>