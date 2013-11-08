<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function imprimirNoticia()
			{
				$this->smarty->display('getNoticias.tpl');
				
			}

			public function setNoticias($Noticias)
			{
			
			  	$this->smarty->assign("Noticia",$Noticias);
			}
						public function setSecciones($seccion)
			{
				$this->smarty->assign("Seccion",$seccion);
			}
}

?>