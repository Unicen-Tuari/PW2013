<?php
require('./libs/Smarty.class.php');
class Viewindex
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	} 

    

      public function generaAutos($datos)
    {
        $this->smarty->assign("autos",$datos);
        //$this->smarty->display('index.tpl');
    }
    

     public function muestraCategoria($datos)
    {
        $this->smarty->assign("marcas",$datos);
        //$this->smarty->display('index.tpl');
    }
     public function imprimirPagina()
    {
        $this->smarty->display('index.tpl');
    }

   

}
/*
EN la vista
CargarCategorias
$Smarty->assign("categorias", $categorias);

CargarAutos
$Smarty->assign("Autos", $autos);

ImprimirPagina
$Smatry->show();

Lo que te esta pasando es q estas llamando 2 veces a SHow.*/
?>

