<?php
	include './controlers/controler_login.php';
	include './views/view_login.php';
	include './models/model_login.php';

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
