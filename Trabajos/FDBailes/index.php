<?php
	include './models/model_index.php';
	include './views/view_index.php';
	include './controllers/controller_index.php';
	$model = new Modelindex();
	$view = new Viewindex();
	$controller = new Controllerindex($model, $view);
	if (isset($_POST["id_cliente"]))
	{
	  $controller->imprimirConsulta($_POST["id_cliente"]);
	}
	else
	{
	  $controller->imprimirPagina();
	}
?>