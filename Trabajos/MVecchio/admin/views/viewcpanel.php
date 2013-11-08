<?php
	require('../libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			
			public function imprimirPagina($usuario){
				$this->smarty->assign("usuario",$usuario);
				$this->smarty->display('cpanel.tpl');
			}
		}
?>