<?php
	include './controllers/controlleragregarautomotor.php';
	include './views/viewagregarautomotor.php';
	include './models/modelagregarautomotor.php';
		
	$model= new Model();
	$view = new View();
	$controller = new Controller($view,$model);
	$controller->agregarAuto();
	$controller->imprimirPagina();
?>