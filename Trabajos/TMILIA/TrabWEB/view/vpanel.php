<?php
require('./libs/Smarty.class.php');
class Viewpanel
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function muestraPagina()
    {
		$this->smarty->display('panel.tpl');
    }
     public function generaAutos($datos)
    {
        $this->smarty->assign("autos",$datos);
        $this->smarty->display('panel.tpl');
    }
  
}
?>