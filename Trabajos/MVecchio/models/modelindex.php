<?php
class Model{ 
  private $conn;

    
    public function __construct() {
        include ('./conexion.php');
        try        {
            $this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        }
        catch(PDOException $pe)        {
            die('Error de conexion, Mensaje: ' .$pe->getMessage());
        }
    }
    
	public function getNombreCliente($id_cliente){
        $sql = "Select * from cliente where id_cliente = '$id_cliente'";
		$query = $this->conn->prepare($sql);
		$query->execute();
        
        return $query->fetchAll();
	}
	
}
?>