<?php
$nombre = $_GET["nombre"];

//Conexión
	include('coneccion.php');	
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}

//Consulta	
		$sql = "SELECT * FROM persona WHERE Nombre = '$nombre'";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
        

?>
