<?php
	class Controller{
		private $view;
		private $model;

    public function __construct($view, $model) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){
		$this->view->imprimirPagina();
	}
	public function publicarAuto()
	{
		$this->model->publicarAuto();
	}
}
?>