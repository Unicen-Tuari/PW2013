<?php
	include './controller/controller_index.php';
	include './view/view_index.php';

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
