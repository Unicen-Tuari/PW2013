<?php
	
include '/model/mpanel.php';
include '/view/vpanel.php';
include '/controllers/cpanel.php';


session_start();  


if (isset($_SESSION['id_client'])) {
	$id = $_SESSION['id_client'];

	//print_r($_SESSION['id_client']);

	$model = new Modelpanel();
	$view = new Viewpanel();
	$controller = new Controllerpanel($model, $view);

	$controller->muestraPagina();
	$controller->mostrarAuto($id);
	$controller->buscarUser($id);
}else header('Location: index.php');




?>
