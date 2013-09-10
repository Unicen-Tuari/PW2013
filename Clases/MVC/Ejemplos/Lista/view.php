<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirListaPersonas($listaNombresPersonas, $listaApellidosPersonas){
       
		$smarty = new Smarty;

		$smarty->assign("Nombre",$listaNombresPersonas);
		$smarty->assign("Apellido",$listaApellidosPersonas);

		$smarty->display('index.tpl');
    }
}
?>