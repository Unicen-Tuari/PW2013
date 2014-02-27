<?php
class Model{
    private $conn;

    public function __construct(){
        include ('./conexion.php');
        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        }
        catch(PDOException $pe){
            die('Error de conexion, Mensaje: ' .$pe->getMessage());
        }
    }
    
    public function grabarFormulario($formulario){
        $sql = "INSERT INTO mensajecontacto VALUES (NULL,'".$formulario['nombre']."','".$formulario['email']."','".$formulario['asunto']."','".$formulario['telefono']."','".$formulario['mensaje']."');";
        $query = $this->conn->prepare($sql);
        $query->execute($formulario);
    }    
}
?>