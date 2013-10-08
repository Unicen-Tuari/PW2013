<?php
require('./libs/Smarty.class.php');

include('conexion.php');
//Consulta
	$sql = "SELECT es_cliente_amigo,url_imagen,web FROM cliente WHERE es_cliente_amigo='s'";

	//Ejecucion
	$resultado = $conn->prepare($sql);
	$resultado->execute();
	if(!$resultado){
		die(print_r($conn->errorInfo()));
	}
	$amigos=$resultado->fetchAll(PDO::FETCH_ASSOC);

	//Si es null, hubo un error
	if(!$amigos)
	{
	  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
	}

	$smarty = new Smarty;
	$smarty->assign("amigos", $amigos);
	
	//$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;

	$smarty->display('clientes.tpl');

?>