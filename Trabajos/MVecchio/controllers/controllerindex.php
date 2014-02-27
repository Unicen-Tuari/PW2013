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
		if(isset($_SESSION["email"])){
			$cliente=$this->model->getNombreCliente($_SESSION["id_cliente"]);
			$this->view->imprimirPagina($cliente[0]['nombre']);
		}
		else{
			
			$this->view->imprimirPagina(null);
		}
	}
	
	}
?>