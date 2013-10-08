<?php
require('./libs/Smarty.class.php');
class Viewaddcar
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function imprimirPagina()
    {   
        
		$this->smarty->display('addcar.tpl');
    }
  
     public function muestraMarca($datos)
    {
        $this->smarty->assign("marcas",$datos);
        $this->smarty->display('addcar.tpl');
    }

    public function mensajeExito()
      {
        echo "el auto se grabo correctamente";
    }
  
}
?>