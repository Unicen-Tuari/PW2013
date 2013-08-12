<?php
	require('./libs/Smarty.class.php');	
	$smarty = new Smarty;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;
	$smarty->debugging = true;

	//Conexión
	include('coneccion.php');	
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}
	
	//Consulta
	if (isset($_POST['s'])){
		$nombre = $_POST['s'];
		$sql = "SELECT * FROM Paciente WHERE Nombre_Apellido = '$nombre'";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		$smarty->assign("datos", $resultado);
	}
	$smarty->display('kinesiologia.tpl');
?>
