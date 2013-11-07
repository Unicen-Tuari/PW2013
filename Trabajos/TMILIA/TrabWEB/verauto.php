<?php
	
include '/model/model_verauto.php';
include '/view/view_verauto.php';
include '/controllers/controller_verauto.php';

$model = new Modeladmin();
$view = new Viewadmin();
$controller = new Controlleradmin($model, $view);


$controller->mostrarCategorias();
if(isset($_POST["nombre"]))
{
  $consulta["nombre"] = $_POST["nombre"];
  $consulta["email"] = $_POST["email"];
  $consulta["telefono"] = $_POST["telefono"];
  $consulta["texto"] = $_POST["texto"];

$controller->grabarConsulta($consulta);

}
else
{
	$id = $_GET['id'];
	$controller->buscarAuto($id);
	$controller->buscarImag($id);
	//$id = $_GET['marca'];
	$controller->buscarCat($id);
	$controller->mostrarPagina();
}


?>

