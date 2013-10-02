<?php
	include './controlers/cindex.php';
	include './views/vindex.php';

//	$model = new Model();
	$view = new View();
	$controller = new Controller($view);
	$controller->imprimirPagina();
?>
