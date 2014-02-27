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
				$this->smarty->display('envio_de_mail.tpl');
				
			}

			public function setTags($tags)
			{
				$this->smarty->assign("Tag",$tags);		
			}

			public function setSecciones($seccion)
			{
				$this->smarty->assign("Seccion",$seccion);
			}		
}
?>