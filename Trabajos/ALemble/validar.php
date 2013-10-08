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

$query = mysql_query("	UPDATE posts p
						SET p.valido = 1
						WHERE p.ID = $idpost", $conn);

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
$mail->Subject =  utf8_encode("Aviso de post validado.");
$mail->AltBody = "";
$mail->MsgHTML(
"Aviso de post validado<br>
Tu post con el titulo: ".$titulo.". Ha sido validado!.<br>  
<br>
Muchas gracias por compartir contenido en Brom's!<br>
Por favor trata de mantener tu post con links activos, cada vez que lo edites entrara denuevo en la etapa de verificacion,
pero no deberas tener ningun problema si lo editas correctamente sin infrigir ninguna regla basica. Te recomendamos que
solo edites los links.<br> 
<br> 
Suerte y continua realizando estos aportes!.<br>
<br>
Augusto, Username (Blackjak)");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();

mysql_close($conn);
}
header('Location: index.php');
?>