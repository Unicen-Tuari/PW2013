<?php
require('./libs/Smarty.class.php');
class View
{
  	  private $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function imprimirPagina()
			{
				$this->smarty->display('admin_login.tpl');
				
			}

			public function setTags($tags)
			{
				$this->smarty->assign("Tag",$tags);		
			}

			public function setSecciones($seccion)
			{
				$this->smarty->assign("Seccion",$seccion);
			}

			 public function MensajeError($error){
				echo $error;
		    }
			
}

?>