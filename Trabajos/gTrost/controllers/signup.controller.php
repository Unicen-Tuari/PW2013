<?php

class SignupController extends BaseController {
	public function indexAction() {

		$this->view->display();
		
	}

	public function newUserAction() {

		$user_array = array('usuario_nombre' => $_POST['usuario_nombre'], 
							'usuario_mail' => $_POST['usuario_mail'],
							'usuario_pass1' => md5($_POST['usuario_pass1']),
							'usuario_direccion' => $_POST['usuario_direccion'],
							'usuario_ciudad' => $_POST['usuario_ciudad'],
							'usuario_provincia' => $_POST['usuario_provincia'],
							'usuario_codigopostal' => $_POST['usuario_codigopostal']);

		$model = new signup();
		$model->cargarUsuario($user_array);

		//Mail
		$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
		  ->setUsername('fretziweb')
		  ->setPassword('TDArqI8tBnPHvmf')
		  ;
		
		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance('El usuario se ha registrado con éxito')
		  ->setFrom(array('fretziweb@gmail.com' => 'Fretzi'))
		  ->setTo(array($user_array['usuario_mail'] => $user_array['usuario_nombre']))
		  ->setBody("Su cuenta ha sido creada exitosamente")		  
		  ;

		$result = $mailer->send($message);


		$_SESSION['message'] = 'Se creo su nuevo usuario.';

		header('Location: '. '/');
	}


}