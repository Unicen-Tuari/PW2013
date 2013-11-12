<?php
	include './controllers/controllereditardatos.php';
	include './views/vieweditardatos.php';
	include './models/modeleditardatos.php';
		
	$model= new Model();
	$view = new View();
	$controller = new Controller($view,$model);

	$controller->imprimirPagina();
?>