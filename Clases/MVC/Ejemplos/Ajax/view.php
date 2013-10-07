<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirPagina($nombresPersonas){
       
		$smarty = new Smarty;
		$smarty->assign("nombres", $nombresPersonas);
		$smarty->display('index.tpl');
    }
	
	 public function imprimirDatos($nombresPersonas){
     
		$smarty = new Smarty;
		$smarty->assign("datos", $nombresPersonas);
		$smarty->display('data.tpl');
    }
}
?>