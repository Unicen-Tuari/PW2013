<?php
	include './controllers/controller_ver_noticia_completa.php';
	include './views/view_ver_noticia_completa.php';
	include './models/model_ver_noticia_completa.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	$controller->imprimirNoticia();

?>
