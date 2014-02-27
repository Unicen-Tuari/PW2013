<?php
	
include '/model/model.php';
include '/view/view_index.php';
include '/controllers/controller.php';

$model = new Modelindex();
$view = new Viewindex();
$controller = new Controllerindex($model, $view);

session_start();
$controller->mostrarAuto();
$controller->mostrarCategorias();
$controller->buscarImag();
if (isset($_SESSION['mail']))
{
	//echo $_SESSION['mail'];
}


if(isset($_GET['marca']))
{
	$id = $_GET['marca'];
	$controller->buscarCat($id);
	//$controller->mostrarAuto($id);

}else{
	$controller->imprimirPagina();
}


?>


