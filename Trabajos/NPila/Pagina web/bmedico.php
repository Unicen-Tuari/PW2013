<?php
	include './controlers/cbmedico.php';
	include './views/vbmedico.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
