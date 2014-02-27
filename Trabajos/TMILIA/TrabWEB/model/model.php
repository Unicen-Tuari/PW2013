<?php
class Modelindex
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

    public function consultaAuto()
	{

		$sql = "SELECT * FROM auto ORDER BY id DESC LIMIT 3";


		/*$sql = "SELECT distinct a.* FROM auto a JOIN auto_imagen ai ON (a.id = ai.id_auto) 
		JOIN imagen i ON (ai.id_imagen = i.id) WHERE a.id = ai.id_auto";*/
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function consultaCategoria()
	{

		$sql= "SELECT * FROM  marca WHERE id IN (select distinct a.id_marca from auto a)";
		$q = $this->conn->prepare($sql);
		$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);

	}

	public function consultaImagen()
	{
		
		/*$sql = "SELECT i.path FROM auto a 
		JOIN auto_imagen ai ON (a.id = ai.id_auto)
		JOIN imagen i ON (ai.id_imagen = i.id) 
		ORDER BY i.id DESC LIMIT 3";*/

		$sql = "SELECT i.path FROM auto a 
		JOIN (select * from auto_imagen group by id_auto) ai ON (a.id = ai.id_auto)
		JOIN imagen i ON (ai.id_imagen = i.id) 
		ORDER BY i.id DESC LIMIT 3";

	




		//$sql = "SELECT i.path FROM auto_imagen ai
		 //JOIN imagen i ON (ai.id_imagen = i.id) WHERE ai.id_auto IN (select distinct ai.id_auto from auto_imagen ai) ORDER BY i.path DESC LIMIT 3";
		
		//$sql = "SELECT i.path FROM imagen i JOIN auto_imagen ai ON (a.id = ai.id_auto)";

		//$sql = "SELECT i.path FROM imagen i where i.id=(select distinct id_auto from auto_imagen) ORDER BY i.id DESC LIMIT 3 ";
		$q = $this->conn->prepare($sql);
		$q->execute();		
		$resultado = $q->fetchAll(PDO::FETCH_ASSOC);

		for ($i=0; $i < 3 ; $i++) { 
			$resultado2 [$i] = $resultado [$i]['path'];
		}
		
		//print_r($resultado);
		return $resultado2;//[0]['path']; // imagenes/527a93bb42188.jpg
	}

	public function buscarCat($id)
	{
		
		$sql = "SELECT a.id, a.titulo, a.valor,a.anio, i.path FROM auto a 
		JOIN marca m ON (a.id_marca = m.id) 
		JOIN (select * from auto_imagen group by id_auto) ai ON (a.id = ai.id_auto) JOIN imagen i ON (ai.id_imagen = i.id)  where a.id_marca = $id";
		$q = $this->conn->prepare($sql);
		$q->execute();
		
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
	

}
?>