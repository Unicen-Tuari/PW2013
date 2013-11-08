<?php
	include './controllers/controller_admin_login.php';
	include './views/view_admin_login.php';
	include './models/model_admin_login.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	//$view->imprimirPagina();


	if (isset ($_POST['usuario'])) 
		{
				$administrador["usuario"] = $_POST["usuario"];
				$administrador["password"] = $_POST["password"];
				
		$controller->loguearAdmin($administrador);
		}
	else
		{ 
	  		$controller->imprimirPagina();

		}
?>
