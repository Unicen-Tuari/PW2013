<?php
	
include '/model/mcomentario.php';
include '/view/vcomentario.php';
include '/controllers/ccomentario.php';

$model = new Modelcomentario();
$view = new Viewcomentario();
$controller = new Controllercomentario($model, $view);


if(isset($_POST["nombre"]))
{
  $consulta["nombre"] = $_POST["nombre"];
  $consulta["email"] = $_POST["email"];
  $consulta["telefono"] = $_POST["telefono"];
  $consulta["texto"] = $_POST["texto"];
  $consulta["id_auto"] = $_POST['id'];

  $id = $_POST['id'];
  
$controller->grabarConsulta($consulta);
$controller->mostrarComentario($id);

}



?>
