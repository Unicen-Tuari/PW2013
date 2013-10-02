<?php
	include './controlers/cpacientes.php';
	include './views/vpacientes.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
