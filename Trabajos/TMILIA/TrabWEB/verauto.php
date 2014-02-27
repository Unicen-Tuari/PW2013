<?php
	
include '/model/model_verauto.php';
include '/view/view_verauto.php';
include '/controllers/controller_verauto.php';

$model = new Modeladmin();
$view = new Viewadmin();
$controller = new Controlleradmin($model, $view);


$controller->mostrarCategorias();

session_start();

/*if(isset($_POST["nombre"]))
{
  $consulta["nombre"] = $_POST["nombre"];
  $consulta["email"] = $_POST["email"];
  $consulta["telefono"] = $_POST["telefono"];
  $consulta["texto"] = $_POST["texto"];
  $consulta["id_auto"] = $_POST['id'];
  
$controller->grabarConsulta($consulta);

}
else
{*/
	$id = $_GET['id'];
	$controller->buscarAuto($id);
	$controller->buscarImag($id);
    $controller->buscarCat($id);
	$controller->mostrarPagina();
	//$controller->mostrarComentario($id);
//}


?>

