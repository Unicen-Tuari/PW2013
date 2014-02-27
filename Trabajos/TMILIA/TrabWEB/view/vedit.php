<?php
require('./libs/Smarty.class.php');
class Viewedit
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function imprimirPagina()
    {   
        
		$this->smarty->display('edit.tpl');
    }
     public function uploadAuto($consulta)
    {   
        $this->smarty->assign("upload",$consulta);
        $this->smarty->display('edit.tpl');
    }
  
    public function muestraMarca($consulta)
    {
        $this->smarty->assign("marcas",$consulta);
        //$this->smarty->display('edit.tpl');
    }
  
 

    public function mensajeExito()
      {
        echo "el auto se grabo correctamente";

        header('location: panel.php');

    }
   
}
?>