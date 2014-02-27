<?php
	include './controllers/controllereditardatos.php';
	include './views/vieweditardatos.php';
	include './models/modeleditardatos.php';
		
	$model= new Model();
	$view = new View();
	$controller = new Controller($view,$model);
	if (isset($_POST["nombre"])){
		$cliente['id_cliente'] = $_POST['id_cliente'];
		$cliente['direccion'] = $_POST['direccion'];
		$cliente['nombre'] = $_POST['nombre'];
		$cliente['apellido'] = $_POST['apellido'];
		$cliente['email'] = $_POST['email'];
		$cliente['localidad']= $_POST['localidad'];
		$cliente['telefono']= $_POST['telefono'];
		$cliente['provincia']= $_POST['provincia'];
		$cliente['razon_social']= $_POST['razon_social'];
		$cliente['web']= $_POST['web'];
		$controller->setDatos($cliente);
	}else
		$controller->imprimirPagina();
	
?>