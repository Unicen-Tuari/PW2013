<?php
	include './controlers/cipacientes.php';
	include './views/vipacientes.php';
	include './models/minfopaciente.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	if (isset($_POST['Nombre_Apellido']))
		{
			/*Ver como insertar estudios (Tabla diferente)*/
			$controller->ingresaPaciente($_POST);
			/*$controller->imprimirPaginaSalida();*/
		}
	else
		{			
			$controller->imprimirPagina();
		}		
?>
