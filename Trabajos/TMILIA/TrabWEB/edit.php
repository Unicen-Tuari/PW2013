<?php
  
include '/model/medit.php';
include '/view/vedit.php';
include '/controllers/cedit.php';

$model = new Modeledit();
$view = new Viewedit();
$controller = new Controlleredit($model, $view);

/*session_start();
$id_user = $_SESSION['id_client'];
//print_r($id_user);*/
if(isset($_GET["id"])){
  $id_car_upload = intval($_GET["id"]);
  $controller->buscarAuto($id_car_upload);
  $controller->mostrarMarca();
}


echo "hola";
if (isset($_POST["id"])) {
  
  print_r($_POST["id"]);

    if(isset($_POST["titulo"]))
    {
      $auto["titulo"] = $_POST["titulo"];
      $auto["valor"] = $_POST["valor"];
      $auto["modelo"] = $_POST["modelo"];
      $auto["anio"] = $_POST["anio"];
      $auto["descripcion"] = $_POST["descripcion"];
      $auto["marca"] = $_POST["marca"];

     

    $controller->grabarEdicion($auto,$_POST["id"]);
    header('Location: panel.php');
    }
}

?>
