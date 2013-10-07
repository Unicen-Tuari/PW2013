<?php
	
include '/model/mdatos.php';
include '/view/vdatos.php';
include '/controllers/cdatos.php';

$model = new Modeldatos();
$view = new Viewdatos();
$controller = new Controllerdatos($model, $view);


$controller->mostrarAuto();
?>
