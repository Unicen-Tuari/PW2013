<?php
	
include '/model/mpanel.php';
include '/view/vpanel.php';
include '/controllers/cpanel.php';



$model = new Modelpanel();
$view = new Viewpanel();
$controller = new Controllerpanel($model, $view);

session_start();
//print_r($_SESSION['id_client']);
$id = $_SESSION['id_client'];
//print_r($id);
$controller->mostrarAuto($id);
$controller->buscarUser($id);


?>
