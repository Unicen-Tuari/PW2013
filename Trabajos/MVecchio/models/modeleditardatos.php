<?php
class Model
{ 
    private $conn;

    
    public function __construct()
    {
    	include ('./conexion.php');
        try
        {
            $this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        }
        catch(PDOException $pe)
        {
            die('Error de conexion, Mensaje: ' .$pe->getMessage());
        }
    }
    
    public function getDatosCliente($id_cliente){
        $sql = "SELECT c.* FROM cliente c WHERE c.id_cliente=$id_cliente";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            return $query->fetchAll();
        }    	
    }
}
?>