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
				$this->smarty->display('Home.tpl');
				
			}
			
			public function setTags($tags)
			{
				$this->smarty->assign("Tag",$tags);		
			}

			public function setSecciones($seccion)
			{
				$this->smarty->assign("Seccion",$seccion);
			}

			public function setNoticias($Noticia)
			{
			
			  	$this->smarty->assign("Noticia",$Noticia);
			}
}

?>