<?php
	include './controller/controller_pacientes.php';
	include './view/view_pacientes.php';	
	include './model/model_paciente.php';
	
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	session_start();

	if (isset($_SESSION['User']))		
		{
			if (isset($_POST['search-text']))
				{
					$controller->consultaPaciente($_POST['search-text']);	
				}
			else if	(isset($_POST['valor']))
				{
					$controller->borrarPaciente($_POST['valor']);
				}
			else if (isset($_POST['historia']))
				{
					$controller->actClinica($_POST);
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
