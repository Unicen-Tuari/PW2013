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
	
	public function consultaMensaje()
		{

			
			//$sql= "SELECT  a.titulo, a.valor FROM  marca m JOIN auto a ON (m.$id = a.id_marca)";
			$sql= "SELECT texto,nombre,telefono FROM consulta ";
			$q = $this->conn->prepare($sql);
			$q->execute();
			
			return $q->fetchAll(PDO::FETCH_ASSOC);
		}
}
?>