<?php
class Modelmensaje
{
	private $host = "localhost";
	private $db = "autosBD";
	private $user = "root";
	private $pass = "";
	private $conn;
    
	
    public function __construct()
    {
        try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
    }
	
	public function consultaMensaje($id)
		{			
			//$sql= "SELECT texto,nombre,telefono FROM consulta c JOIN auto a ON (c.id_auto = a.id) AND JOIN usuario u ON (u.id = $id) ";
			$sql= "SELECT texto,nombre,telefono FROM consulta WHERE id_auto = $id";
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