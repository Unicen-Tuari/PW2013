<?php
	
include '/model/mmensaje.php';
include '/view/vmensaje.php';
include '/controllers/cmensaje.php';

$model = new Modelmensaje();
$view = new Viewmensaje();
$controller = new Controllermensaje($model, $view);


$controller->imprimirPagina();
$controller->mostrarMensaje();
?>