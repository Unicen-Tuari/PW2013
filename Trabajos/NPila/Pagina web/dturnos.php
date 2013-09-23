<?php
	include './controlers/cdturnos.php';
	include './views/vdturnos.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
