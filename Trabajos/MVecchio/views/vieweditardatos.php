<?php
	require('./libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			
			public function imprimirPagina($datos){
				$this->smarty->assign("datos", $datos);
				$this->smarty->display('editardatos.tpl');
			}
		}
?>