<?php
  
include '/model/maddcar.php';
include '/view/vaddcar.php';
include '/controllers/caddcar.php';

$model = new Modeladdcar();
$view = new Viewaddcar();
$controller = new Controlleraddcar($model, $view);

$controller->mostrarMarca();

if(isset($_POST["titulo"]))
{
  $auto["titulo"] = $_POST["titulo"];
  $auto["valor"] = $_POST["valor"];
  $auto["modelo"] = $_POST["modelo"];
  $auto["anio"] = $_POST["anio"];
  $auto["descripcion"] = $_POST["descripcion"];
 // $auto["marca"] = $_POST["marca"];
  //$auto[""] = $_POST["imagen"];

  $controller->grabarAuto($auto);

}
else
{ 
  $controller->imprimirPagina();

}

?>
