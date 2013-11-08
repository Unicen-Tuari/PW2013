<?php
	class Controller
		{
			private $view;

   // private $model;
	
 
    public function __construct($view) {
    //    $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}
}
?>
