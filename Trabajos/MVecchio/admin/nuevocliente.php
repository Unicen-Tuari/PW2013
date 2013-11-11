<?php
	include './controllers/controlleradmin.php';
	include './views/viewadmin.php';
	include './models/modeladmin.php';
		
	$view = new View();
	$model= new Model();
	$controller = new Controller($view,$model);
	$controller->imprimirPagina('nuevocliente.tpl');
?>