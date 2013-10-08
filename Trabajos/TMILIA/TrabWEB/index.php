<?php
	
include '/model/model.php';
include '/view/view_index.php';
include '/controllers/controller.php';

$model = new Modelindex();
$view = new Viewindex();
$controller = new Controllerindex($model, $view);


$controller->mostrarAuto();
$controller->mostrarCategorias();
$controller->imprimirPagina();

?>


