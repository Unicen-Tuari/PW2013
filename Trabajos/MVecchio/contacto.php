<?php
	include './controllers/controllercontacto.php';
	include './views/viewcontacto.php';
	include './models/modelcontacto.php';
	
	$model= new Model();
	$view = new View();
	$controller = new Controller($view, $model);
	if(isset($_POST["nombre"])){
	    $formulario["nombre"] = $_POST["nombre"];
		$formulario["asunto"] = $_POST["asunto"];
		$formulario["email"] = $_POST["email"];
		$formulario['mensaje']= $_POST['mensaje'];
		$formulario['telefono']= $_POST['telefono'];
		$controller->grabarFormulario($formulario);
	}
	else{
		$controller->imprimirPagina();
	}

?>
