<?php
	include './controllers/controllerlinks.php';
	include './views/viewlinks.php';
		
	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>

