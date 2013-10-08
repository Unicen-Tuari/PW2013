<?php
	
include '/model/model_verauto.php';
include '/view/view_verauto.php';
include '/controllers/controller_verauto.php';

$model = new Modeladmin();
$view = new Viewadmin();
$controller = new Controlleradmin($model, $view);
$id = $_GET['id'];

//echo $id;

$controller->buscarAuto($id);

?>

