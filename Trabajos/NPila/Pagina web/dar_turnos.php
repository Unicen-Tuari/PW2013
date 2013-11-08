<?php
	include './controlers/controler_turnos.php';
	include './views/view_turnos.php';
	include './models/model_turnos.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	session_start();

	if (isset($_SESSION['User']))
		{
			if (isset($_POST['Nombre_apellido']))
				{
					$controller->ingresaTurno($_POST);
				}
			else
				{
					$controller->imprimirPaginaDar();		
				}
		}
	else
		{
			header('Location: login.php');
		}	
?>
