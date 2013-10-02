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
    public function consultaReparaciones($id_cliente)
    {
    	$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,ESTADO e WHERE r.id_cliente = $id_cliente AND (e.id=r.id_estado) AND (e.nombre_estado='En Reparación' OR e.nombre_estado='Retirada' OR e.nombre_estado='Reparada') ORDER BY fecha_ingreso DESC;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>