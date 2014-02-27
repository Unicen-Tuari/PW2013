<?php
	include './controllers/controllerpublicarautomotor.php';
	include './views/viewpublicarautomotor.php';
	include './models/modelpublicarautomotor.php';
		
	$model= new Model();
	$view = new View();
	$controller = new Controller($view,$model);
	$controller->publicarAuto();
	$controller->imprimirPagina();
?>