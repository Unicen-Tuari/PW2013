<?php
	require('.libs/Smarty.class.php');	
	$smarty->debugging = true;
	$smarty = new Smarty;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->display('index.tpl');
?>
