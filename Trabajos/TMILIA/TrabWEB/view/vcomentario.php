<?php
require('./libs/Smarty.class.php');
class Viewcomentario
{
    private $smarty;
    public function __construct()
    {
    	$this->smarty = New Smarty;
	}
    public function muestraPagina($consulta)
    {
		//$this->smarty->display('comentario.tpl');
		$this->smarty->assign("comentario",$consulta);
            $this->smarty->display('comentario.tpl');
    }
   
     
   

     /*public function generaComentario($consulta)
    {
        //print_r($consulta);
        //if ($consulta!= NULL) {
            $this->smarty->assign("comentario",$consulta);
            //$this->smarty->display('ver_auto.tpl');
        }*/
        

    
}
?>