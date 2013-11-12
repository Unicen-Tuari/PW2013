<?php
	include './models/model_login.php';
	include './views/view_login.php';
	include './controllers/controller_login.php';
	$model = new Modellogin();
	$view = new Viewlogin();
	$controller = new Controllerlogin($model, $view);

	if (isset($_POST["username"]))
	{
		$controller->loginUsuario($_POST);
	}
	else
	{
		$controller->imprimirPagina();
	}
?>
