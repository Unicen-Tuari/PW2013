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
					$this->smarty->display('ipacientes.tpl');/*A donde manda despues de cargar*/
				}

			public function imprimirPaginaSalida()
				{
				$this->smarty->display('index.tpl');
				}
		}
?>
