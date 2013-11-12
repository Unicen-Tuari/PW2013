<?php
	
	ini_set('default_charset','utf-8');
	include './controllers/controller_index.php';
	include './views/view_index.php';
	include './models/model_index.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	$controller->imprimirNoticia();

?>
