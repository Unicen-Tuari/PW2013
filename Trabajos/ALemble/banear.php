<?php
session_start();
if (($_SESSION['username'] == 'Blackjak') && ($_SESSION['iduser'] == 8)){
include('conn.php');
$iduser= $_POST['iduser'];
$query_nombre = mysql_query("	SELECT Nombre,Mail
						FROM usuarios
						WHERE ID = $iduser", $conn);
$consulta = mysql_fetch_assoc($query_nombre);
$nombre = $consulta['Nombre'];
$correo = $consulta['Mail'];

mysql_close($conn);

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
$mail->Subject =  utf8_encode("Aviso de baneo de usuario.");
$mail->AltBody = "";
$mail->MsgHTML(
"Tu usuario ha sdo baneado.<br>
Has sido baneado por infringir gravemente una regla, o por realizar repetidamente acciones nos debidas.<br>  
<br>
Por favor revisa las reglas y protocolo del sitio si tienes alguna duda.<br>
Lamentamos que esto alla ocurrido.<br> 
<br> 
Si ha habido un problema o tienes alguna queja, por favor responde este email a broms.web@gmail.com<br>
<br>
Augusto, Username (Blackjak)");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();
}
header('Location: index.php');
?>