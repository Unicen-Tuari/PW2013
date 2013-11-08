<?php
	include './controlers/controler_medicos.php';
	include './views/view_medicos.php';	
	include './models/model_medicos.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	session_start();

	if (isset($_SESSION['User']))
		{
			if (isset($_POST['search-text']))
				{
					$controller->consultaMedico($_POST['search-text']);
				}
			else
				{
					$controller->imprimirPaginaInfo();
				}
		}
	else
		{
			header('Location: login.php');
		}
?>
