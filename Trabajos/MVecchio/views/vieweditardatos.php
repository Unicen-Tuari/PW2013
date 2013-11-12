<?php
	require('./libs/Smarty.class.php');
	class View{
			private $smarty;

		    public function __construct(){
				$this->smarty = New Smarty;
			}
			
			public function imprimirPagina($datos){
				$this->smarty->assign("datos", $datos);
				$this->smarty->display('editardatos.tpl');
			}

			public function MensajeExito(){
    			echo "Tus cambios han sido guardados";
    		}
	
			public function MensajeError(){
				echo "Falla al actualizar los datos. \nIntenta mas tarde";
	    	}
		}
?>