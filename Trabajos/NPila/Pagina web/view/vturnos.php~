<?php
	require('./libs/Smarty.class.php');
	class View
	{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			public function imprimirPagina()
			{
				$this->smarty->display('turnos.tpl');
			}

			public function muestraTurnos($info)
			{
				$this->smarty->assign("datos", $info);
				$this->smarty->display('resconsultaturnos.tpl');
			}
	}
?>
