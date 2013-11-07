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
    public function mostrarImagen($path) // $path = imagenes/527a93bb42188.jpg
    {
        $this->smarty->assign("imagenes",$path);
       //$all_tpl_vars = $smarty->getTemplateVars();
       // print_r($x);
        //var_dump($imagen);
        //echo;
       
    }
    public function generaAutos($datos)
    {
    	$this->smarty->assign("auto",$datos);
    	//$this->smarty->display('ver_auto.tpl');
       // print_r($datos);
	}
     public function muestraCategoria($datos)
    {
        $this->smarty->assign("marcas",$datos);
       // $this->smarty->display('addcar.tpl');
    }

     public function generaCat($datos)
    {
        $this->smarty->assign("autos",$datos);
        $this->smarty->display('index.tpl');
       // print_r($datos);
    }
}
?>