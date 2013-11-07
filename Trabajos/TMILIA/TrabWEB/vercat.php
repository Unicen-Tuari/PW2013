<?php
	
include '/model/mvercat.php';
include '/view/vercat.php';
include '/controllers/cvercat.php';

$model = new Modelvcat();
$view = new Viewcat();
$controller = new Controllercat($model, $view);


//$controller->mostrarAuto();


$controller->mostrarCategorias();
$controller->imprimirPagina();

$id = $_GET['id'];
$controller->buscarCat($id);

?>