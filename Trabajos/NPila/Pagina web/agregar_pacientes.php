<?php
	include './controlers/controler_pacientes.php';
	include './views/view_pacientes.php';
	include './models/model_paciente.php';

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
