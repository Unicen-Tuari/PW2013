<?php
session_start();
if (($_SESSION['username'] == 'Blackjak') && ($_SESSION['iduser'] == 8)){
include('conn.php');
$idpost= $_POST['idpost'];
$iduser= $_POST['iduser'];
$query_nombre = mysql_query("	SELECT Nombre,Mail
						FROM usuarios
						WHERE ID = $iduser", $conn);
$consulta = mysql_fetch_assoc($query_nombre);
$nombre = $consulta['Nombre'];
$correo = $consulta['Mail'];

$query_titulo = mysql_query("	SELECT Titulo
						FROM posts
						WHERE ID = $idpost", $conn);
$consulta = mysql_fetch_assoc($query_titulo);
$titulo = $consulta['Titulo'];

$query = mysql_query("	DELETE FROM comentarios
						WHERE IDPost = $idpost", $conn);
$query = mysql_query("	DELETE FROM posts
						WHERE ID = $idpost", $conn);


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
$mail->Subject =  utf8_encode("Aviso de post eliminado.");
$mail->AltBody = "";
$mail->MsgHTML(
"Aviso de post eliminado<br>
Tu post con el titulo: ".$titulo.". Ha sido borrado, o no ha pasado la etapa de validacion.<br>  
<br>
Por favor revisa las reglas y protocolo del sitio si tienes alguna duda.<br>
Lamentamos que esto alla ocurrido, pero alguna regla severa o un requirimiento basico no has cumplido.<br> 
<br> 
Suerte y por favor no continues con estas acciones si no quieres ser baneado.<br>
<br>
Augusto, Username (Blackjak)");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();

mysql_close($conn);
}
header('Location: index.php');

?>