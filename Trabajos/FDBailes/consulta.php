<?php
	include ('variables.php');
	try {
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe)
	{
		die('Error de conexion, Mensaje: '.$pe->getMessage());
	}
	$dni = 35418826;
	$sql = "SELECT *,DATE_FORMAT(fecha_inicio,'%d/%m/%Y') as fecha_inicio_f,DATE_FORMAT(fecha_fin,'%d/%m/%Y') as fecha_fin_f FROM REPARACION WHERE dni = $dni ORDER BY fecha_inicio DESC LIMIT 3";
	$datos_rep = $conn->query($sql);
	if(!$datos_rep) {
		die(print($conn->errorInfo()[2]));
	}
	$datos_rep = $datos_rep->fetch(PDO::FETCH_ASSOC);
	$sql2 = "SELECT nombre_estado FROM ESTADO WHERE id_estado = $datos_rep[id_estado]";
	$nombre_estado = $conn->query($sql2);
	if(!$nombre_estado) {
		die(print($conn->errorInfo()[2]));
	}
	$nombre_estado = $nombre_estado->fetch(PDO::FETCH_ASSOC);
	if (is_null($datos_rep['fecha_fin_f'])) {
		$datos_rep['fecha_fin_f'] = '-';
	}
?>