<?php
class Modelvcat
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

public function consultaCategoria()
	{

		//$sql = "SELECT * FROM marca  ";
		//$sql = "SELECT * FROM marca WHERE id =(select id_marca where auto)  ";
		$sql= "SELECT DISTINCT  m.nombre,m.id FROM  marca m JOIN auto a ON (m.id = a.id_marca)";
			
			//WHERE p.idioma LIKE 'Inglés' AND EXTRACT (month FROM e.fecha_entrega) =1

		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch

		return $q->fetchAll(PDO::FETCH_ASSOC);

	}

	public function buscarCat($id)
	{

		//$sql = "SELECT * FROM marca WHERE id= $id";
		$sql= "SELECT  a.titulo, a.valor FROM  marca m JOIN auto a ON (m.$id = a.id_marca)";
		$q = $this->conn->prepare($sql);
		$q->execute();
		
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}



}
?>

