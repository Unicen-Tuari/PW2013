<?php
require('./libs/Smarty.class.php');
//Configuración
$host 	= "localhost";
$db	= "ajax";
$user	= "root";
$pass	= "";

//Conexión
try{
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT DISTINCT Nombre FROM persona";


//Ejecucion
$sth = $conn->prepare($sql);
$sth->execute();
$r = $sth->fetchAll();

print_r ($r);

$smarty = new Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombres", $r);


$smarty->display('index.tpl');




?>
