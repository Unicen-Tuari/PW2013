<?php
require('./libs/Smarty.class.php');
class Viewmensaje
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}

      public function mostrar($mensaje)
    {
        //print_r($mensaje);
        $this->smarty->assign("mensajes",$mensaje);
        $this->smarty->display('mensaje.tpl');
        
    }

        public function generaUser($consulta)
    {
        $this->smarty->assign("usuario",$consulta);
        $this->smarty->display('mensaje.tpl');
    }
    public function imprimirPagina()
    {
		//$this->smarty->display('mensaje.tpl');
    }

    
    
  
}
?>