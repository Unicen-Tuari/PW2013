<?php
	include './controllers/controllerindex.php';
	include './views/viewindex.php';
	include './models/modelindex.php';
			
	$view = new View();
	$model = new Model();
	$controller = new Controller($view,$model);
	$controller->imprimirPagina();
?>

