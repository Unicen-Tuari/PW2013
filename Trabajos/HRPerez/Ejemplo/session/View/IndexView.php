<?php
require('./libs/Smarty.class.php');
class IndexView
{
     
    public function imprimirPagina($nombre){
		$smarty = new Smarty;
		$smarty->assign("Nombre",$nombre);
		$smarty->display('index.tpl');
    }
	
}
?>