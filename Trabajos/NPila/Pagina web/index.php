<?php
	include './controlers/controler_index.php';
	include './views/view_index.php';

//	$model = new Model();
	$view = new View();
	$controller = new Controller($view);
	
	session_start();

	if (isset($_SESSION['User']))
		{
			$controller->imprimirPagina();
		}
	else
		{
			header('Location: login.php');
		}
?>
