<?php
class Modeladdcar
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
	public function consultaMarca(){

		$sql = "SELECT * FROM marca";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch

		return $q->fetchAll(PDO::FETCH_ASSOC);

	}
	public function insertarAuto($auto,$mail){
		//$id_usuario = "SELECT id FROM usuario WHERE email = $mail";
		$id_usuario=2;

		$sql = "INSERT INTO auto (id_usuario,marca,titulo,valor,descripcion,modelo,anio) VALUES (:id_usuario,:marca,:titulo,:valor,:descripcion,:modelo,:anio)";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id_usuario'=>$id_usuario, ':marca'=>$auto["marca"], ':titulo'=>$auto["titulo"] ,':valor'=>$auto["valor"] ,':descripcion'=>$auto["descripcion"] ,':modelo'=>$auto["modelo"] ,':anio'=>$auto["anio"] ));

	}
}
?>