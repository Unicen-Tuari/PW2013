<?php
require('./libs/Smarty.class.php');
class Viewmensaje
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function imprimirPagina()
    {
		//$this->smarty->display('mensaje.tpl');
    }

      public function mostrarMensaje($mensaje)
    {
        //print_r($mensaje);
        $this->smarty->assign("mensaje",$mensaje);
        $this->smarty->display('mensaje.tpl');
        
    }
    
  
}
?>