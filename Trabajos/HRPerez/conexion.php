<?php
//Configuración
$host   = "localhost";
$db = "tecper";
$user = "root";
$pass = "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass,$array(PDO:MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(PDOException $pe)
{
  die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

?>