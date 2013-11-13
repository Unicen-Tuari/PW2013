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
       
    }


      public function muestraCategoria($datos)
    {
        $this->smarty->assign("marcas",$datos);
        //$this->smarty->display('index.tpl');
    }

      public function generaAutos($datos, $imagenes)
    {
      for ($i=0; $i < count($datos); $i++) { 
        $datos[$i]['path'] = $imagenes[$i];
      }

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

