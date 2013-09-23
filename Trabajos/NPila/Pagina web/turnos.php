<?php
	include './controlers/cturnos.php';
	include './views/vturnos.php';	
	include './models/mturnos.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->imprimirPagina();
?>
