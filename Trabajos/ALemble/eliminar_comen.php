<?php
session_start();
if (($_SESSION['username'] == 'Blackjak') && ($_SESSION['iduser'] == 8)){
include('conn.php');
$idcomen= $_POST['idcomen'];
$idpost= $_POST['idpost'];
$username = $_POST['username'];

$query_correo = mysql_query("	SELECT Nombre, Mail
								FROM usuarios
								WHERE Username =  '".$username."'", $conn);

$consulta = mysql_fetch_assoc($query_correo);
$correo = $consulta['Mail'];
$nombre = $consulta['Nombre'];

$query_texto = mysql_query("	SELECT texto
						FROM comentarios
						WHERE ID = $idcomen", $conn);
$consulta = mysql_fetch_assoc($query_texto);
$texto = $consulta['texto'];

$query = mysql_query("	DELETE FROM comentarios
						WHERE ID = $idcomen", $conn);
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
$mail->Subject =  utf8_encode("Aviso de comentario eliminado.");
$mail->AltBody = "";
$mail->MsgHTML(
"Aviso de comentario eliminado<br>
Tu comentario: ".$texto.".<br> Ha sido borrado, la causa mas probable es que sea ofensivo o falte el respeto a algun usuario.<br>  
<br>
Por favor revisa las reglas y protocolo del sitio si tienes alguna duda.<br>
Lamentamos que esto alla ocurrido.<br> 
<br> 
Suerte y por favor no continues con estas acciones si no quieres ser baneado.<br>
<br>
Augusto, Username (Blackjak)");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();
}
header('Location: index.php?type=P&idpost='.$idpost.'&paginacomen=1');

?>