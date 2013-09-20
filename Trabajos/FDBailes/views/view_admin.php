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
		$this->smarty->display('admin.tpl');
    }
    public function generaTablarep($datos)
    {
    	$this->smarty->assign("reparaciones",$datos);
    	$this->smarty->display('tabla_adminrep.tpl');
	}
    public function generaTablacli($datos)
    {
        $this->smarty->assign("clientes",$datos);
        $this->smarty->display('tabla_admincli.tpl');
    }
}
?>