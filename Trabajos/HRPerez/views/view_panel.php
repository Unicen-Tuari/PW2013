<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function imprimirPanel()
			{
				$this->smarty->display('panel.tpl');
				
			}
			public function setTags($tags)
			{
				$this->smarty->assign("Tag",$tags);		
			}

			public function setSecciones($seccion)
			{
				$this->smarty->assign("Seccion",$seccion);
			}

			public function setNoticias($noticias)
			{
			
			  	$this->smarty->assign("Noticia",$noticias);
			}

}

?>