<?php
	
include 'Model/IndexModel.php';
include 'View/IndexView.php';
include 'Controller/IndexController.php';

$model = new IndexModel();
$view = new IndexView();
$controller = new IndexController($model, $view);
$controller->imprimirPagina();

?>
