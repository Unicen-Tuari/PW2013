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
			if (isset($_POST['fecha']))
				{
					$controller->consultaTurno($_POST);
				}
			else
				{
					$controller->imprimirPagina();
				}
		/*	else if	(isset($_POST['id_turno']))
				{
					$controller->borrarTurno($_POST)
				}*/
		}
	else
		{
			header('Location: login.php');
		}
		
?>
