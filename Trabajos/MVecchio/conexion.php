<?php
//Conexión
//Configuración
	$host 	= "localhost";
	$db	= "gestoriaautomotor";
	$user	= "root";
	$pass	= "";
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}
?>