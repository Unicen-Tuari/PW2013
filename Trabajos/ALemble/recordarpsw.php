<?php

include('conn.php');

$correo = $_POST['email'];

$sql = "SELECT Mail, Nombre, Username, Password
		FROM usuarios 
		WHERE (Mail = '$correo') ";
$query = mysql_query($sql, $conn) or die(mysql_error());
if(!$query)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if (mysql_num_rows($query) == 0){
	header('Location: recordar.php?verif=bad');
}else{

$consulta = mysql_fetch_assoc($query);
$usuario = $consulta['Username'];
$nombre = $consulta['Nombre'];
$contraseña = $consulta['Password'];

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
$mail->Subject =  utf8_encode("Recordatorio de datos.");
$mail->AltBody = "";
$mail->MsgHTML(
"Recordatorio de datos:<br>
<br> 
Usuario: $usuario<br> 
Contraseña: $contraseña<br>");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();
}
mysql_close($conn);
header('Location: recordar.php?verif=ok');
?>