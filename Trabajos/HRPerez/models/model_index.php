<?php
class Model
{
    public $conn;
    //public $noticiaCompleta;
    	public function __construct(){

		//Configuración
		$host   = "localhost";
		$db = "tecper";
		$user = "root";
		$pass = "";

		//Conexión
		try{

		$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
		  die('Error de conexion, Mensaje: ' -$pe->getMessage());
		}
	}

    public function ConsultaNoticia($tags){
 
		$sql = "SELECT * FROM tag WHERE id_tag = '$tags'";
		//$sql = "SELECT * FROM noticia";
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;

	}
		
	public function getTags(){
		
		$sql = "SELECT * FROM tag";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function getSecciones(){
		
		$sql = "SELECT * FROM seccion";
		$query = $this->conn->query($sql);
		return $query->fetchAll();

	}

	public function getNoticiasByTag($id_tag){
		
		$sql = "SELECT * FROM noticia WHERE id_tag = ".$id_tag;
		$query = $this->conn->query($sql);
		return $query->fetchAll();

	}

	public function getNoticiasBySection($id_seccion){
		
		$sql = "SELECT * FROM noticia WHERE id_seccion = ".$id_seccion;
		$query = $this->conn->query($sql);
		return $query->fetchAll();

	}

	public function getNoticias(){
		
		$sql = "SELECT * FROM noticia"; 
		$query = $this->conn->query($sql);
		return $query->fetchAll();

	}



}
?>