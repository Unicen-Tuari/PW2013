<?php
require('./libs/Smarty.class.php');
class Viewmensaje
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function muestraPagina()
    {
		$this->smarty->display('mensaje.tpl');
    }
     public function generaAutos($datos)
    {
        $this->smarty->assign("autos",$datos);
        $this->smarty->display('mensaje.tpl');
    }
  
}
?>