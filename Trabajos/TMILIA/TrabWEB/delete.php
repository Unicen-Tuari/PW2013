<?php
	
include '/model/mdelete.php';
include '/view/vdelete.php';
include '/controllers/cdelete.php';



$model = new Modeldelete();
$view = new Viewdelete();
$controller = new Controllerdelete($model, $view);

//session_start();
//print_r($_SESSION['id_client']);
//$id = $_SESSION['id_client'];
if ( isset($_GET['id_car']))
	{
		$controller->eliminarRegistro($_GET['id_car']);
	}
//print_r($id_user);




?>
