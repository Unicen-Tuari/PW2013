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
				$this->smarty->display('infopaciente.tpl');
			}

			public function muestraInfo($nombre)
			{
				$this->smarty->assign("datos", $nombre);
				$this->smarty->display('rescunsultakines.tpl');
			}
}
?>
