<?php
include './models/modellogin.php';
include './views/viewlogin.php';
include './controllers/controllerlogin.php';
$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if (isset($_POST["email"])){ 
	$controller->loginUsuario($_POST);
}
else{
	$controller->imprimirPagina();
}
?>