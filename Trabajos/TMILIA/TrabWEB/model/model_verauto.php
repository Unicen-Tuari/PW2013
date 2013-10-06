<?php
class Model
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
	
	public function insertarAuto($auto){
	
		$sql = "INSERT INTO auto (modelo,descripcion,valor,anio) VALUES (:modelo,:descripcion,:valor,:anio)";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':modelo'=>$auto["modelo"] ,':descripcion'=>$auto["descripcion"] ,':valor'=>$auto["valor"] ,':anio'=>$auto["anio"] ));

	}
	
	public function consultaAuto(){

		$sql = "SELECT * FROM auto";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>