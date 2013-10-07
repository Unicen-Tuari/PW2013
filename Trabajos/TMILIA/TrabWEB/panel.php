<?php
	
include '/model/mpanel.php';
include '/view/vpanel.php';
include '/controllers/cpanel.php';

$model = new Modelpanel();
$view = new Viewpanel();
$controller = new Controllerpanel($model, $view);


$controller->mostrarAuto();
?>
