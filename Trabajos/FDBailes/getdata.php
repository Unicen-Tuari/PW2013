<?php
	require('./libs/Smarty.class.php');	
	$dni = $_GET["dni"];
	$smarty = new Smarty;
//Conexión
	include ('variables_conexion.php');
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}

//Consulta
		
		$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_inicio,'%d/%m/%Y') as fecha_inicio_f,DATE_FORMAT(r.fecha_fin,'%d/%m/%Y') as fecha_fin_f FROM REPARACION r,ESTADO e WHERE dni = $dni AND (e.id_estado=r.id_estado) AND (e.nombre_estado='En Reparación' OR e.nombre_estado='Retirada' OR e.nombre_estado='Reparada') ORDER BY fecha_inicio DESC;";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$reparaciones=$resultado->fetchAll(PDO::FETCH_ASSOC);

		if ($resultado->rowCount()>0)
		{
			$smarty->assign("reparaciones", $reparaciones);
			$smarty->display('data.tpl');
		}
		else
		{
			return false;
		}
?>
