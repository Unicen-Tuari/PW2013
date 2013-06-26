<?php
	include ('variables.php');
	try {
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe)
	{
		die('Error de conexion, Mensaje: '.$pe->getMessage());
	}
	if (isset($_POST['comentario'])){
		$comentario = $_POST['comentario'];
		$sql = "insert into COMENTARIOS (texto)
				values ('$comentario')"; 
		$var1 = $conn->query($sql);
		if(!$var1) {
			die(print($conn->errorInfo()[2]));
		}
		else {
			print ('Comentario recibido. ¡Muchas gracias!');
		}
	}
?>
