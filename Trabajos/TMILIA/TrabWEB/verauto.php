<?php
	
include '/model/model_verauto.php';
include '/view/view_verauto.php';
include '/controllers/controller_verauto.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);

$controller->mostrarAuto();

?>