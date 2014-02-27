<?php
	include './controllers/controllerinicio.php';
	include './views/viewinicio.php';
			
	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>