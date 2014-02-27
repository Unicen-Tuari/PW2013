<?php
	
include '/model/mmensaje.php';
include '/view/vmensaje.php';
include '/controllers/cmensaje.php';

$model = new Modelmensaje();
$view = new Viewmensaje();
$controller = new Controllermensaje($model, $view);


//$id_comentario = $_REQUEST[id];
//print_r($id_comentario);

session_start();  
$id = $_SESSION['id_client'];
//print_r($id);
$controller->imprimirPagina();
$controller->mostrarMensaje($id);
$controller->buscarUser($id);
?>