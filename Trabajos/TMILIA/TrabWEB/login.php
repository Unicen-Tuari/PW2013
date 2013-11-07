<?php
	
include '/model/mlogin.php';
include '/view/vlogin.php';
include '/controllers/clogin.php';



$model = new Modellogin();
$view = new Viewlogin();
$controller = new Controllerlogin($model, $view);

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