<?php
	include './controlers/cmedicos.php';
	include './views/vmedicos.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
