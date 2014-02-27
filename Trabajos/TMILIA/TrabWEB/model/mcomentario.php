<?php
class Modelcomentario
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
 
		public function insertarConsulta($consulta)
	{
		
		//$id_auto = $id;
		//nombre, email, telefono, texto, id_auto

		$sql = "INSERT INTO  `autosbd`.`consulta` (`nombre` ,`email` ,`telefono` ,`texto`,`id_auto`) VALUES ( :nombre, :email, :telefono, :texto, :id_auto)";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':nombre'=>$consulta["nombre"],':email'=>$consulta["email"],':telefono'=>$consulta["telefono"],':texto'=>$consulta["texto"],':id_auto'=>$consulta["id_auto"]));
		}


		public function buscarComentario($id)
	{
		
		$sql = "SELECT distinct texto, nombre FROM consulta where id_auto = $id ORDER BY id DESC LIMIT 1";
		$q = $this->conn->prepare($sql);
		$q->execute();
		
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
	
}
?>