<?php
	include './controlers/cipacientes.php';
	include './views/vipacientes.php';
	include './models/minfopaciente.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->imprimirPagina();
?>
