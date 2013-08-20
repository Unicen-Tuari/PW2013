<?php
	require('./libs/Smarty.class.php');	
	$smarty = new Smarty;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;

//Conexión
	include('coneccion.php');	
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}

//Consulta
		echo "nahuel"	;	
		$sql = "SELECT DISTINCT Nombre FROM persona";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		echo "Nahuel 2";
		$dato=$resultado->fetchAll(PDO::FETCH_ASSOC);
		$smarty->assign("datos", $dato);
		//print_r ($dato);
	
	$smarty->display('index.tpl');
?>
