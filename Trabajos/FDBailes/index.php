<?php
	include './models/model_index.php';
	include './views/view_index.php';
	include './controllers/controller_index.php';
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	if(isset($_POST["id_cliente"]))
	{
	  
	  $controller->imprimirConsulta($_POST["id_cliente"]);
	}
	else
	{
	  $controller->imprimirPagina();
	}
?>