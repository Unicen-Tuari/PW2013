<?php
require('./libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->display('estadotransferencia.tpl');

/*

//Configuración
$host 	= "localhost";
$db	= "gestoriaautomotor";
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
$sql = "SELECT c.id_cliente,t.*,tt.* FROM cliente c,tramite t, tipo_tramite tt WHERE c.id_cliente=t.id_cliente AND t.id_tramite=tt.id_tramite";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}*/

?>