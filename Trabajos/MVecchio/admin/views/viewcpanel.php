<?php
	require('../libs/Smarty.class.php');
	class View
		{
			private $smarty;

		    public function __construct()
			{
				$this->smarty = New Smarty;
			}
			
			public function imprimirPagina(){
				$this->smarty->display('cpanel.tpl');
			}
			public function mostrarTablaCliente(){
				$this->smarty->display('insertCliente.tpl');
			}
			public function editCliente($datos){
				$this->smarty->assign("datos", $datos);
				$this->smarty->display('editcliente.tpl');
				
			}
			public function delCliente($datos){
				$this->smarty->assign("datos", $datos);
				$this->smarty->display('delcliente.tpl');
			}
			public function MensajeExito(){
    			echo "Los cambios han sido guardados";
    		}	
			public function MensajeError(){
				echo "Falla al actualizar los datos. \nIntenta mas tarde";
	    	}
			
		}
?>