<?php
	
include 'Model/LoginModel.php';
include 'View/LoginView.php';
include 'Controller/LoginController.php';

$model = new LoginModel();
$view = new LoginView();
$controller = new LoginController($model, $view);

if(isset($_POST["mail"]))
{
    $formulario["mail"] = $_POST["mail"];
	$formulario["pass"] = $_POST["pass"];
	$controller->loginUsuario($formulario);
}
else
{
	$controller->imprimirPagina();
}

		
?>
