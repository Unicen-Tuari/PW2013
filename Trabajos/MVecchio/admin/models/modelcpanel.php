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
    
     public function getCliente($id_cliente){
        $sql = "SELECT c.* FROM cliente c WHERE c.id_cliente=$id_cliente";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            return $query->fetchAll();
    }  

    public function setDatos($cliente){
        $sql = "UPDATE cliente SET id_cliente = '".$cliente['id_cliente']."',nombre = '".$cliente['nombre']."',apellido = '".$cliente['apellido']."',direccion = '".$cliente['direccion']."',telefono = '".$cliente['telefono']."',provincia = '".$cliente['provincia']."',localidad = '".$cliente['localidad']."',email = '".$cliente['email']."',tipo_documento = '".$cliente['tipo_documento']."',nro_documento = '".$cliente['nro_documento']."',descuento = '".$cliente['descuento']."',razon_social = '".$cliente['razon_social']."',es_cliente_amigo = '".$cliente['es_cliente_amigo']."',web = '".$cliente['web']."' WHERE id_cliente = ".$cliente['id_cliente']."";
        $query = $this->conn->prepare($sql);
        $query->execute();
            
        return $query->fetchAll();
    }        

    public function newCliente($cliente){
        $sql = "INSERT INTO cliente VALUES (NULL,'".$cliente['nombre']."','".$cliente['apellido']."','".$cliente['direccion']."','".$cliente['telefono']."','".$cliente['provincia']."','".$cliente['localidad']."','".$cliente['email']."','".$cliente['tipo_documento']."','".$cliente['nro_documento']."','".$cliente['descuento']."','".$cliente['razon_social']."','".$cliente['es_cliente_amigo']."','".$cliente['web']."','".$cliente['url_imagen']."');";
        echo $sql;
        $query = $this->conn->prepare($sql);
        $query->execute($cliente);
    }           
}
?>