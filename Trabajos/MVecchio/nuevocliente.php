<?php
require('./libs/Smarty.class.php');
include('conexion.php');

//Insert	
		

$smarty = new Smarty;

//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->display('nuevocliente.tpl');
?>