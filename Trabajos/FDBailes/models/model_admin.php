<?php
class Modeladmin
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

    	$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,ESTADO e WHERE (e.id=r.id_estado) ORDER BY fecha_ingreso DESC;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $reparaciones=$resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    public function consultaClientes()
    {
    	$sql = "SELECT * FROM CLIENTE;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    public function consultaDetallerep($id_reparacion)
    {
    	$sql = "SELECT r.*,c.nombre,c.telefono,c.mail,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE r.id = $id_reparacion AND (e.id=r.id_estado) AND c.id=r.id_cliente;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function consultaDetallecli($id_cliente)
    {
    	$sql = "SELECT * FROM CLIENTE WHERE id = $id_cliente;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function consultaBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda)
    {
		if ($tipo_busqueda == 'na')
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (c.id = r.id_cliente) AND (c.nombre LIKE '$valor_principal') AND (c.apellido LIKE '$valor_secundario') ORDER BY fecha_ingreso DESC;";
		}
		else if ($tipo_busqueda == 'id_cliente')
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (r.id_cliente = $valor_principal) AND (c.id = r.id_cliente) ORDER BY fecha_ingreso DESC;";
		}
		else
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (c.id = r.id_cliente) AND (r.id = $valor_principal);";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
    {
		if ($tipo_busqueda == 'na')
		{
			$sql = "SELECT * FROM CLIENTE WHERE (nombre LIKE '$valor_principal') AND (apellido LIKE '$valor_secundario') ORDER BY apellido,nombre ASC;";
		}
		else
		{
			$sql = "SELECT * FROM CLIENTE WHERE (id=$valor_principal) ORDER BY apellido,nombre ASC;";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaNextidcli()
	{
		$sql = "SELECT Auto_increment FROM information_schema.TABLES WHERE TABLE_NAME = 'CLIENTE';";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function guardaCli($cliente)
	{
		$sql = "INSERT INTO CLIENTE VALUES (NULL,'".$cliente['nombre']."','".$cliente['apellido']."','".$cliente['direccion']."','".$cliente['telefono']."','".$cliente['mail']."');";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
	}
}
?>