<?php
	include 'controllers/index.php';
	include 'views/index.php';

//	$model = new Model();
	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
