<?php
	
include '/model/model.php';
include '/view/view_index.php';
include '/controllers/controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);

$controller->mostrarAuto();

?>

