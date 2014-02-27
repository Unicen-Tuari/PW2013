<?php
	require('./libs/Smarty.class.php');
	class View{
			private $smarty;

	    public function __construct(){
			$this->smarty = New Smarty;
		}
		
		public function imprimirPagina(){
			$this->smarty->display('contacto.tpl');
		}
		
		public function MensajeExito(){
    		echo "Tu mensaje ah sido enviado";
    	}
	
		public function MensajeError(){
			echo "Mensaje fallido. Itenta más tarde";
    	}
	}
?>
