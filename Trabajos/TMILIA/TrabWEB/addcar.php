<?php
  
include '/model/maddcar.php';
include '/view/vaddcar.php';
include '/controllers/caddcar.php';

$model = new Modeladdcar();
$view = new Viewaddcar();
$controller = new Controlleraddcar($model, $view);

session_start();

if (isset($_SESSION['id_client'])) { 
$id_user = $_SESSION['id_client'];
//print_r($id_user);
/*if(isset($_GET["id"])){
	$id_car_upload = intval($_GET["id"]);
	$controller->buscarAuto($id_car_upload);
}*/

      $controller->mostrarMarca();

      if(isset($_POST["titulo"]))
      {
        $auto["titulo"] = $_POST["titulo"];
        $auto["valor"] = $_POST["valor"];
        $auto["modelo"] = $_POST["modelo"];
        $auto["anio"] = $_POST["anio"];
        $auto["descripcion"] = $_POST["descripcion"];
        $auto["marca"] = $_POST["marca"];

        $auto["imagen0"] = $_FILES["imagen0"];
        $auto["imagen1"] = $_FILES["imagen1"];
        $auto["imagen2"] = $_FILES["imagen2"];

      $controller->grabarAuto($auto, $id_user);

      }
      else
      { 
        $controller->imprimirPagina();

      }

}else header('Location: index.php');


?>
