<?php
	include './controlers/cainfopaciente.php';
	include './views/vainfopaciente.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
