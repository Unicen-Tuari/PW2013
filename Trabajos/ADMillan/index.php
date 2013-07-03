<?php
	require 'Smarty-3.1.13/libs/Smarty.class.php';


	try { 
		$db = new PDO("mysql:dbname=millanad;host=localhost","millanad","q2w3d"); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	}catch
		( PDOException $e) { echo "Error de conexion: " . $e->getMessage(); 
	}

	
	$result = $db->query("SELECT * FROM contacto;");

	if (!$result) {
    	print "<p>Error al obtener informacion de contacto.</p>\n";
	} else {
		while($fila=mysql_fetch_array($result)){
			$tel = $fila['tel'];
			$direccion = $fila['direccion'];
		}
	}

	//$db = NULL;

	$titulo = "ComidasDeFlor.com.ar | Comidas caseras en Tandil";
	$html = new Smarty;
	$html->assign("titulo",$titulo);
	$html->assign("tel",$tel);
	$html->assign("direccion",$direccion);
	switch($_GET['seccion']){
		case "contacto": $html->assign("seccion", 'contacto.html'); break;
		case "flor": $html->assign("seccion",'flor.html'); break;
		case "adultos": $html->assign("seccion",'adultos.html'); break;
		case "salado": $html->assign("seccion",'salado.html'); break;
		case "dulce": $html->assign("seccion",'dulce.html'); break;
		case "inicio": $html->assign("seccion",'inicio.html'); break;
		default: $html->assign("seccion",'inicio.html');break;
	}
	$html->display("index.html");
?>