<?php
require('./libs/Smarty.class.php');
class Viewindex
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	} 


     public function imprimirPagina()
    {
        $this->smarty->display('index.tpl');
    }
       public function mostrarImagen($path) 
    {
        $this->smarty->assign("imagenes",$path);
       //$all_tpl_vars = $smarty->getTemplateVars();
       // print_r($x);
        //var_dump($imagen);
        //echo;
       
    }


      public function muestraCategoria($datos)
    {
        $this->smarty->assign("marcas",$datos);
        //$this->smarty->display('index.tpl');
    }

      public function generaAutos($datos)
    {
        $this->smarty->assign("autos",$datos);
        //$this->smarty->display('index.tpl');
    }
     public function generaCat($datos)
    {
        $this->smarty->assign("autos",$datos);
        $this->smarty->display('index.tpl');
       // print_r($datos);
    }

   

}

?>

