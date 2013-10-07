<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_GET["nombre"]))
{
	$controller->imprimirDatos($_GET["nombre"]);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
