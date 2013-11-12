<?php
class Model
{
    public $conn;
    
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

	public function ConsultaNoticia(){
		
		$sql = "SELECT titulo,s.nombre_seccion,s.descripcion,t.nombre_tag,t.descripcion
		FROM noticia n
		INNER JOIN seccion s ON ( s.id_seccion = n.id_seccion )
		INNER JOIN tag t ON ( t.id_tag = n.id_tag )" ; 
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

/*	public function ConsultaSeccion(){
		
		$sql = "SELECT nombre_seccion, descripcion
		FROM seccion";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/
}
?>