<?php
require('./libs/Smarty.class.php');
class View
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function muestraPagina()
    {
		$this->smarty->display('index.tpl');
    }
    public function generaTabla($datos)
    {
    	$this->smarty->assign("reparaciones",$datos);
    	$this->smarty->display('data.tpl');
	}
}
?>