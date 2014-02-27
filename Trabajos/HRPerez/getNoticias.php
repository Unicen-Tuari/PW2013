<?php
	include './controllers/controller_getNoticias.php';
	include './views/view_getNoticias.php';
	include './models/model_getNoticas.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	$controller->imprimirNoticia();
?>
