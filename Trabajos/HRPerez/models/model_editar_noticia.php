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

    public function insertarNoticia($noticia){

		$sql = "INSERT INTO `noticia` (`titulo`,`subtitulo`,`cuerpo`, `id_tag`, `id_seccion`) VALUES (:titulo,:subtitulo,:cuerpo,:id_tag,:id_seccion)";
		
			$resultado = $this->conn->prepare($sql);
			 $resultado->execute(array(':titulo'=>$noticia["titulo"],':subtitulo'=>$noticia["subtitulo"],':cuerpo'=>$noticia["cuerpo"],':id_tag'=>$noticia["id_tag"],':id_seccion'=>$noticia["id_seccion"]));
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;
	}

	public function ConsultaNoticia($id_noticia){
		$sql= "SELECT * FROM noticia WHERE id_noticia =".$id_noticia;
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

}

?>




