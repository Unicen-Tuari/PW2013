<?php
//Configuración
$host 	= "localhost";
$db		= "consultorio_medico";
$user	= "root";
$pass	= "491991_454404";

//Conexión
try{
$conn = new PDO('mysql:host=$host;dbname=$db',$user,$pass);
}
catch(PDOException $pe){
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}
//Consulta
if (isset($_POST['s'])){
	$nombre = $_POST['s'];
	$sql = "SELECT * FROM paciente LIMIT 1";
	$resultado = $conn->query($sql);
	if(!$resultado){
  		die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
		}
	}
	else {
	print('<form method="post" action="kinesiologia.php"><div><input type="text" name="s" id="search-text" value="" /><input type="submit" id="search-submit" value="GO" /></div></form>');}
?>
