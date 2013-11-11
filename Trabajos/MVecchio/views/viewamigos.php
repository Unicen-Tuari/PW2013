<?php
	require('./libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			
			public function imprimirPagina($amigos){
				$this->smarty->assign("amigos", $amigos);
				$this->smarty->display('clientes.tpl');
			}
		}
?>