<?php
	include './controlers/controler_mail.php';	
	include './models/model_mail.php';
	
	$model = new Model();
	$controller = new Controller($model);

	$consultas = $controller->consultaMail('2013-11-07');

	foreach ($consultas as $consulta)
		{
			$arrhora = explode(':',$consulta['Hora']);
			$hora = $arrhora[0].':'.$arrhora[1];
			
			$arrfecha = explode('-', date("m-d"));
			$fecha = $arrfecha[1].'/'.$arrfecha[0];

			$to = $consulta['Mail'];
			
			$subject = 'Aviso de Turno';

			$headers = "From: tu-sitio@gmail.com \r\n";
			$headers .= "Reply-To: noreply@noreply.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		

			$message = '<html><body style="background: #eee; text-align:center;">';
			$message .= '<h1 style="font-size: 30px; color: #2E2EFE; text-transform: capitalize">';
			$message .= "$consulta[Nombre_Apellido]</h1><br><br>"; 
			$message .= "<a>Recuerde que el dia: $fecha a las: $hora tiene un turno para ser atendido</a><br><br><br>";
			$message .= "<a> Mensaje enviado automaticamente NO RESPODER</a>";
			$message .= "</body></html>";

		}

	if(mail($to,$subject,$message,$headers))
		echo 'success';

?>
