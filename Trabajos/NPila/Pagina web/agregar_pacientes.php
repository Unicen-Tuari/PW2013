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
			if (isset($_POST['Nombre_Apellido']))
				{
					$controller->ingresaPaciente($_POST);
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
