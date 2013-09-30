<?php
	include './controlers/cinfopaciente.php';
	include './views/vinfopaciente.php';	
	include './models/minfopaciente.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->imprimirPagina();
?>
