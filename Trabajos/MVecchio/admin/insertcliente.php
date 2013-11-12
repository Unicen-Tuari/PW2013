<?php
	include './controllers/controllercpanel.php';
	include './views/viewcpanel.php';
	include './models/modelcpanel.php';
		
	$view = new View();
	$model= new Model();
	$controller = new Controller($view,$model);
	if ((isset($_POST['nombre']))){
		$nuevoCliente['nombre']= $_POST['nombre'];
		$nuevoCliente['apellido']= $_POST['apellido'];
		$nuevoCliente['direccion']= $_POST['direccion'];
		$nuevoCliente['localidad']= $_POST['localidad'];
		$nuevoCliente['provincia']= $_POST['provincia'];
		$nuevoCliente['email']= $_POST['email'];
		$nuevoCliente['telefono']= $_POST['telefono'];
		$nuevoCliente['tipo_documento']= $_POST['tipo_documento'];
		$nuevoCliente['nro_documento']= $_POST['nro_documento'];
		$nuevoCliente['razon_social']= $_POST['razon_social'];
		$nuevoCliente['descuento']= $_POST['descuento'];
		$nuevoCliente['es_cliente_amigo']= $_POST['es_cliente_amigo'];
		$nuevoCliente['web']= $_POST['web'];
		$nuevoCliente['url_imagen']= null;//to do
		$controller->insertCliente($nuevoCliente);
	}
	else{
		$controller->mostrarTablaCliente();
	}
?>