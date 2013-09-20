<?php
	require('./libs/Smarty.class.php');
	$smarty = new Smarty;

	//Conexión
	include('conexion.php');	
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}
	
	//Consulta
	if (isset($_POST['fecha'])){
		$fecha = $_POST['fecha'];
		$especialidad= $_POST['especialidad'];
		
		$sql = "SELECT T.Nombre_Apellido, T.Hora, E.Nom_especialidad, DATE_FORMAT( T.Fecha, '%d/%m/%Y' ) AS Fecha
		FROM Turnos T, Especialidad E, Medico M, Paciente P
		WHERE (T.Fecha = STR_TO_DATE( '$fecha', '%d/%m/%Y')) AND (T.Nombre_Apellido = P.Nombre_Apellido AND P.Id_medico = M.Id_medico AND M.Id_especialidad = E.Id_especialidad AND E.Nom_especialidad = '$especialidad')";

		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
		$smarty->assign("datos", $resultado);
		$smarty->display('resconsultaturnos.tpl');
	}
	else{
		$smarty->display('turnos.tpl');
	}
?>
