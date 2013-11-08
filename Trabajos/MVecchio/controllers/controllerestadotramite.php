<?php
	class Controller{
		private $view;
		private $model;

    public function __construct($view, $model) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){
		session_start();
		if (isset($_SESSION['email'])){
			$tramites=$this->model->buscarTramites($_SESSION['id_cliente']);
			if ($tramites == null){
				$this->view->imprimirPagina(null);
			}
			else{
				$this->view->imprimirPagina($tramites);
			}
		}
		else{
			header('Location:HTTP/1.0 404 Not Found');
		}		
	}
}
?>