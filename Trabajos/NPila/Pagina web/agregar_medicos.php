<?php
	include './controller/controller_medicos.php';
	include './view/view_medicos.php';
	include './model/model_medicos.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	session_start();

	if (isset($_SESSION['User']))
		{
			if (isset($_POST['nombre']))
				{
					$controller->ingresaMedico($_POST);
				}
			else
				{			
					$controller->imprimirPaginaAgr();
				}	
		}
	else
		{
			header('Location: login.php');
		}
?>
