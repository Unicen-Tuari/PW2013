<?php
	require('./libs/Smarty.class.php');
	class View{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function imprimirPagina($tramites){
				$this->smarty->assign("tramites",$tramites);
				$this->smarty->display('estadotramite.tpl');
			}

		}
?>