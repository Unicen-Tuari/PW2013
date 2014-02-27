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
			if (isset($_POST['search-text']))
				{
					$controller->consultaMedico($_POST['search-text']);
				}
			else if	(isset($_POST['valor']))
				{
					$controller->borrarMedico($_POST['valor']);
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
