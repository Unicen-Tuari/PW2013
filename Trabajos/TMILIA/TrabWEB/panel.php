<?php
	
include '/model/mpanel.php';
include '/view/vpanel.php';
include '/controllers/cpanel.php';


//{
	$model = new Modelpanel();
	$view = new Viewpanel();
	$controller = new Controllerpanel($model, $view);
//}else {header('Location: addcar.php');}

//session_start());
	session_start($user);
	print_r($user);

$controller->mostrarAuto();
?>
