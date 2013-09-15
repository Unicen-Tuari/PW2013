<?php
class Model
{ 
	private $conn;
    public function __construct()
    {
    	include ('./variables_conexion.php');
    	try
		{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
    }
    public function consultaReparaciones()
    {

    	$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_inicio,'%d/%m/%Y') as fecha_inicio_f,DATE_FORMAT(r.fecha_fin,'%d/%m/%Y') as fecha_fin_f FROM REPARACION r,ESTADO e WHERE (e.id_estado=r.id_estado) ORDER BY fecha_inicio DESC;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$reparaciones=$resultado->fetchAll(PDO::FETCH_ASSOC);
		if ($resultado->rowCount()>0)
		{
			return $reparaciones;
		}
		else
		{
			return false;
		}
    }
    public function consultaClientes()
    {

    	$sql = "SELECT * FROM CLIENTE;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$clientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
		if ($resultado->rowCount()>0)
		{
			return $clientes;
		}
		else
		{
			return false;
		}
    }
}
?>