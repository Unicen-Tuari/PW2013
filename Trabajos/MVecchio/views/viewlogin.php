<?php
require('./libs/Smarty.class.php');
class View
{
    public function __construct(){
    	$this->smarty = new Smarty;
    }
    public function imprimirPagina(){
 		$this->smarty->display('login.tpl');
    }
	
	 public function MensajeError($error){
		echo $error;
    }
}
?>