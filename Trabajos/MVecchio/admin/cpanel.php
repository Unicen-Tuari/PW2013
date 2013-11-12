<?php
	include './models/modelcpanel.php';
	include './views/viewcpanel.php';
	include './controllers/controllercpanel.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($view, $model);

	$controller->imprimirPagina();
		
?>
