<?php
	include './controller/controller_login.php';
	include './view/view_login.php';
	include './model/model_login.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	
	session_start();

	if (isset($_POST['User']))
		{
			$controller->loginUsuario($_POST);
		}
	else
		{		
			$controller->imprimirPagina();
		}	
?>
