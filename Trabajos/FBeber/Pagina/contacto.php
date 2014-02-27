<?php
	include 'controllers/contacto.php';
	include 'views/contacto.php';
	include 'models/contacto.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->obtenerInformacion();
	$controller->imprimirPagina();


?>
