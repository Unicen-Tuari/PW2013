<?php
require('./libs/Smarty.class.php');
class Viewcat
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function imprimirPagina()
    {   
        
		$this->smarty->display('vercat.tpl');
    }
  
      public function muestraCategoria($datos)
    {
        $this->smarty->assign("marcas",$datos);
        
    }
      public function generaCat($datos)
    {
        $this->smarty->assign("auto",$datos);
        $this->smarty->display('vercat.tpl');
       // print_r($datos);
    }
}
?>
