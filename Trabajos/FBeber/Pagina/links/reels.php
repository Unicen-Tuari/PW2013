<?php
require('./libs/Smarty.class.php');


$smarty = new Smarty;

//Configuración
$host 	= "localhost";
$db	= "challhuaco";
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
$sql = "SELECT * FROM producto WHERE nombre_subcategoria='Reels'";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$nombre [] = $r ['nombre_producto'];
	$imagen [] = $r ['imagen'];
	$descripcion [] = $r ['descripcion'];
	$precio [] = $r ['precio'];
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombre", $nombre);
$smarty->assign("imagen", $imagen);
$smarty->assign("descripcion", $descripcion);
$smarty->assign("precio", $precio);

$smarty->display('reels.tpl');
?>
