<?php
$to = 'ijonas@alumnos.exa.unicen.edu.ar';

$subject = 'Envío de Mails Con Estilo';

$headers = "From: tu-sitio@gmail.com \r\n";
$headers .= "Reply-To: tu-mail@gmail.com\r\n";
$headers .= "CC: alguien@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body style="background: #eee;">';
$message .= '<h1>Hello, World!</h1>';
$message .= '</body></html>';


if(mail($to,$subject,$message,$headers))
	echo 'success';

?>