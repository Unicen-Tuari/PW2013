<?php
require('./libs/Smarty.class.php');
class Viewadmin
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function muestraPagina()
    {
		$this->smarty->display('ver_auto.tpl');
    }
    public function generaAutos($datos)
    {
    	$this->smarty->assign("autos",$datos);
    	$this->smarty->display('ver_auto.tpl');
	}
}
?>