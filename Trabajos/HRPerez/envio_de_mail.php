<?php
	include './controllers/controller_envio_de_mail.php';
	include './views/view_envio_de_mail.php';
	include './models/model_envio_de_mail.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($view,$model);

	$controller->imprimirPagina();
	$controller->enviarMail();

?>
