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
	if (isset($_POST['search-text'])){
		$nombre = $_POST['search-text'];
		$sql = "SELECT * FROM Paciente WHERE Nombre_Apellido = '$nombre'";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		$smarty->assign("datos", $resultado);
		$smarty->display('rescunsultakines.tpl');
	}
	else{
		$smarty->display('infopaciente.tpl');
	}
?>
