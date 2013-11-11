<?php
class Model
{ 
    private $conn;

    
    public function __construct()
    {
    	include ('../conexion.php');
        try
        {
            $this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        }
        catch(PDOException $pe)
        {
            die('Error de conexion, Mensaje: ' .$pe->getMessage());
        }
    }
    
    public function buscarAmigos()
    {
    	$sql = "SELECT es_cliente_amigo,url_imagen,web FROM cliente WHERE es_cliente_amigo='s'";

     //Ejecucion
        $resultado = $this->conn->prepare($sql);
        $resultado->execute();
        if(!$resultado){
            die(print_r($this->conn->errorInfo()));
        }
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>