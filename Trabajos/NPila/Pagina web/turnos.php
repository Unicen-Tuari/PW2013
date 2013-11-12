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
			else if	(isset($_POST['valor']))
				{
					$controller->borrarTurno($_POST['valor']);
				}
			else
				{
					$controller->imprimirPagina();
				}
		}
	else
		{
			header('Location: login.php');
		}
		
?>
