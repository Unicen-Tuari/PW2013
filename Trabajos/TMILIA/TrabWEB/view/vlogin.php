<?php
require('./libs/Smarty.class.php');
class Viewlogin
{
     
    	public function imprimirPagina()
    	{
       
			$smarty = new Smarty;
			$smarty->display('login.tpl');
    	}

   
	
	 public function MensajeError($error){
		echo $error;
		header( "refresh:2; url=login.php" );
		
    }
}
?>