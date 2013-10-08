<?php
	include './controlers/clogin.php';
	include './views/vlogin.php';
	include './models/mlogin.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	if (isset($_POST['User']))
		{
			$controller->loginUsuario($_POST);
		}
	else
		{		
			$controller->imprimirPagina();
		}		
?>
