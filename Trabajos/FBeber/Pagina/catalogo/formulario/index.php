<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre_producto"]))
{
    $formulario["nombre_producto"] = $_POST["nombre_producto"];
	$formulario["descripcion"] = $_POST["descripcion"];
	$formulario["precio"] = $_POST["precio"];
	$formulario["imagen"] = $_POST["imagen"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}	
?>