<?php
	include './controlers/cbpacientes.php';
	include './views/vbpacientes.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
