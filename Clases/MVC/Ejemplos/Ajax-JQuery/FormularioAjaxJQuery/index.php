<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre"]))
{
    $formulario["nombre"] = $_POST["nombre"];
	$formulario["apellido"] = $_POST["apellido"];
	$formulario["mail"] = $_POST["mail"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
