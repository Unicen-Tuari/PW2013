<?php
//Configuraci�n
$host 	= "localhost";
$db	= "broms";
$user	= "root";
$pass	= "";
//Conexi�n
try {
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion');
}

?>