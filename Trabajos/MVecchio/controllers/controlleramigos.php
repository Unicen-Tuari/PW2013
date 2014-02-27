<?php
	class Controller{
		private $view;
		private $model;

	    public function __construct($view, $model) {
			$this->model = $model;
			$this->view = $view;
		}
		
		public function imprimirPagina(){
			$amigos=$this->model->buscarAmigos();
			if ($amigos == null){
				echo ("Error al cargar base de datos");
			}
			else
				$this->view->imprimirPagina($amigos);
		}
	}
?>