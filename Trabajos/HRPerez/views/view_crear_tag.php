<?php
require('./libs/Smarty.class.php');
class View
{
  	  private $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function ImprimirPagina()
			{
				$this->smarty->display('crear_tag.tpl');
				
			}		
}

?>