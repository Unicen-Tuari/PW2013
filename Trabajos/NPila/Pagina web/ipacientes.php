<?php
	include './controlers/cipacientes.php';
	include './views/vipacientes.php';

	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
