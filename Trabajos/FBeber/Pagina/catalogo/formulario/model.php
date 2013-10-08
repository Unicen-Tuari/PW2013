<?php
class Model
{
	private $host = "localhost";
	private $db = "challhuaco";
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
	
	public function grabarFormulario($formulario){
		$sql = "INSERT INTO producto (nombre_producto, descripcion, precio, imagen,nombre_subcategoria) VALUES ('".$formulario['nombre_producto']."','".$formulario['descripcion']."','".$formulario['precio']."','".$formulario['imagen']."','Indumentaria')";
		$query = $this->conn->prepare($sql);
		$query->execute();
	}
	
}
?>