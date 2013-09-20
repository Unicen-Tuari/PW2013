<?php
	include './models/model_admin.php';
	include './views/view_admin.php';
	include './controllers/controller_admin.php';
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->imprimirPagina();
?>