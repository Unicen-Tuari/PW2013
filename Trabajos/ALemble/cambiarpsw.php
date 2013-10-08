<?php

include('conn.php');

$usuario = $_POST['username'];
$contraseña = $_POST['contraseña'];
$nuevacontra = $_POST['nueva-contraseña'];
$correo = $_POST['email'];

$sql = "SELECT Password, Nombre
		FROM usuarios 
		WHERE (Username = '$usuario') AND (Mail = '$correo') ";
$query = mysql_query($sql, $conn) or die(mysql_error());
if(!$query)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if (mysql_num_rows($query) == 0) {
	header('Location: cambiar.php?verif=bad');
}else{
$consulta = mysql_fetch_assoc($query);
$nombre = $consulta['Nombre'];
if ($contraseña <> $consulta['Password']){ 
	header('Location: cambiar.php?verif=bad');
	}else{
	$cambio = mysql_query( 
		"UPDATE usuarios u
		SET u.Password = '$nuevacontra' 
		WHERE (u.Username = '$usuario') AND (u.Mail = '$correo') ",$conn);

	require("PHPMailer/class.phpmailer.php");
	require("PHPMailer/class.smtp.php");
	   
	//Especificamos los datos y configuración del servidor
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	   
	//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
	$mail->Username = "broms.web@gmail.com";
	$mail->Password = "bender36217598";
	   
	//Agregamos la información que el correo requiere
	$mail->From = "broms.web@gmail.com";
	$mail->FromName = "Augusto, Creador de Brom's";
	$mail->Subject =  utf8_encode("Cambio de contraseña.");
	$mail->AltBody = "";
	$mail->MsgHTML(
	"Nuevos datos:<br>
	<br> 
	Usuario: $usuario<br> 
	Contraseña: $nuevacontra<br>");
	$mail->AddAddress($correo, $nombre);
	$mail->IsHTML(true);
		
	$mail->Send();
	header('Location: cambiar.php?verif=ok');
	}
}

mysql_close($conn);

?>