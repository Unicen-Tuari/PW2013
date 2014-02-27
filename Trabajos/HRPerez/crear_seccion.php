<?php
	include './controllers/controller_crear_seccion.php';
	include './views/view_crear_seccion.php';
	include './models/model_crear_seccion.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	
	if (isset ($_POST['nombre_seccion'])) 
		{
				$seccion["nombre_seccion"] = $_POST["nombre_seccion"];
				$seccion["descripcion"] = $_POST["descripcion"];
		
		$controller->CrearSeccion($seccion);
		}
	else
		{ 
	  		$controller->imprimirPagina();

		}

?>
