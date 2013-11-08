<?php
	include './controllers/controllerestadotramite.php';
	include './views/viewestadotramite.php';
	include './models/modelestadotramite.php';

	$model= new Model();	
	$view = new View();
	$controller = new Controller($view,$model);
	$controller->imprimirPagina();

?>