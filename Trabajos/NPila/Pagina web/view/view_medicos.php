<?php
	require('./libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
				{
					$this->smarty = New Smarty;
				}
			
			public function imprimirPaginaInfo()
				{
					$this->smarty->display('medicos.tpl');
				}

			public function muestraInfo($nombre)
				{
					$this->smarty->assign("datos", $nombre);
					$this->smarty->display('consulta_medicos.tpl');
				}

			public function imprimirPaginaAgr()
				{
					$this->smarty->display('cargar_medicos.tpl');
				}
		}
?>
