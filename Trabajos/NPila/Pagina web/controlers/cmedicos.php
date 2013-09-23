<?php
	class Controller
		{
			private $view;
 
    public function __construct($view) {
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}
}
?>
