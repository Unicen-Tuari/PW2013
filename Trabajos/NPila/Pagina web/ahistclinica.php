<?php
	include './controlers/cahistclinica.php';
	include './views/vahistclinica.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
