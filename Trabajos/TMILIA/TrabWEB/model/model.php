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
		//$sql = "SELECT * FROM auto a JOIN auto_imagen ai ON (a.id = ai.id_auto) JOIN imagen i ON (ai.id_imagen = i.id) WHERE a.id = ai.id_auto";
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
		//$sql = "SELECT i.path FROM auto_imagen ai JOIN imagen i ON (ai.id_imagen = i.id)   ";//WHERE ai.id_auto = $id
		$sql = "SELECT i.path FROM auto a JOIN auto_imagen ai ON (a.id = ai.id_auto) JOIN imagen i ON (ai.id_imagen = i.id) ORDER BY i.id DESC LIMIT 3";
		//$sql = "SELECT i.path FROM imagen i JOIN auto_imagen ai ON (a.id = ai.id_auto)";
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
		//$sql= "SELECT * FROM  marca WHERE id IN (select distinct a.id_marca from auto a)";
		$sql = "SELECT a.titulo, a.valor,a.anio FROM auto a JOIN marca m ON (a.id_marca = m.id) where a.id_marca = $id";
		$q = $this->conn->prepare($sql);
		$q->execute();
		
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
	

}
?>