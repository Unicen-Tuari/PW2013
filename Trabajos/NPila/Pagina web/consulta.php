<?php
	//Configuración
	$host = "localhost";
	$db = "consultorio_medico";
	$user = "root";
	$pass = "491991_454404";

	//Conexión
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' -$pe->getMessage());
	}
	
	//Consulta
	if (isset($_POST['s'])){
		$nombre = $_POST['s'];
		$sql = "SELECT * FROM Paciente WHERE Nombre_Apellido = '$nombre'";
		$resultado = $conn->query($sql);
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		print('<div class="post"><h2 class="title">Informacion del paciente</h2>'.'<br><br>');
		print('<legend class="title a"><div class="page">');
		print('Nombre y apellido: '.$resultado['Nombre_Apellido'].'<br>D.N.I: '.$resultado['DNI'].'<br>Direccion: '.$resultado['Calle'].'&nbsp &nbsp Nº: '.$resultado['Numero'].'&nbsp &nbsp Localidad: '.$resultado['Localidad'].'<br>Telefono: '.$resultado['Telefono'].'&nbsp &nbsp Movil: '.$resultado['Movil'].'<br>Correo electronico: '.$resultado['Mail'].'<br>Fecha de nacimiento: '.$resultado['Fecha_nac'].'<br>Obra Social: '.$resultado['Obr_soc'].'&nbsp &nbsp Numero de afiliado: '.$resultado['Num_afiliado'].'');
		print('</div></legend></div>');
	}
	else {
		print('<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div><div id="search" ><form method="post" action="kinesiologia.php"><div><input type="text" name="s" id="search-text" value="" /><input type="submit" id="search-submit" value="GO" /></div></form></div>');
	}
?>
