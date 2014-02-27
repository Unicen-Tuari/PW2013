<?php
	include './controllers/controller_panel.php';
	include './views/view_panel.php';
	include './models/model_panel.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($view,$model);
	$controller->imprimirPanel();

?>
