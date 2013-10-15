<?php
	include './controlers/cdturnos.php';
	include './views/vdturnos.php';
	include './models/mdturnos.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	if (isset($_POST['Nombre_apellido']))
		{
			$controller->ingresaTurno($_POST);
		}
	else
		{
			$controller->imprimirPagina();		
		}
?>
