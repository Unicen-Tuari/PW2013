<?php
require('./libs/Smarty.class.php');
class LoginView
{
     
    public function imprimirPagina(){
       
		$smarty = new Smarty;
		$smarty->display('login.tpl');
    }
	
	 public function MensajeError($error){
		echo $error;
    }
}
?>