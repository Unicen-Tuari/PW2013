<?php
	require('./libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
				{
					$this->smarty = New Smarty;
				}
			
			public function imprimirPaginaAgr()
				{
					$this->smarty->display('pacientes.tpl');
				}

			public function imprimirPaginaInfo()
				{
					$this->smarty->display('informacion_paciente.tpl');
				}

			public function muestraInfo($nombre)
				{
					$this->smarty->assign("datos", $nombre);
					$this->smarty->display('consulta_pacientes.tpl');
				}
		}
?>
