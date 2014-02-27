<?php
	include './models/modelamigos.php';
	include './views/viewamigos.php';
	include './controllers/controlleramigos.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($view, $model);

	$controller->imprimirPagina();
		
?>
