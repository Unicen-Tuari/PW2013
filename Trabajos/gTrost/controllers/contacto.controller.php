<?php


class ContactoController extends BaseController {
	public function indexAction() {		
		
		$this->view->display();

	}

	public function enviarAction() {

		$contacto_array = array('contacto_email' => $_POST['contacto_email'],
								'contacto_asunto' => $_POST['contacto_asunto'],
								'contacto_mensaje' => $_POST['contacto_mensaje']
								
						);

		//Mail
		// Create the Transport
		$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
		  ->setUsername('fretziweb')
		  ->setPassword('TDArqI8tBnPHvmf')
		  ;
		
		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		// Create a message
		$message = Swift_Message::newInstance('Se ha recibido una nueva consulta')
		  ->setFrom(array('fretziweb@gmail.com' => 'Fretzi'))
		  ->setTo(array('fretziweb@gmail.com' => 'Fretzilland'))
		  ->setBody("Email: " . $contacto_array['contacto_email'] . "<br> Mensaje: " . $contacto_array['contacto_mensaje'], 'text/html')
		 
		  ;

		// Send the message
		$result = $mailer->send($message);

		$_SESSION['message'] = 'Su mensaje ha sido enviado.';

		header('Location: '. '/');
	}
	
}