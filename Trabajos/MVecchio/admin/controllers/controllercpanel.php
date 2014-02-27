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
		if ((isset($_SESSION['email']))&&($_SESSION['email']=='admin')){
			$this->view->imprimirPagina(null);
		}
		else{
			header('Location:HTTP/1.0 404 Not Found');
		}
	}
	public function mostrarTablaCliente(){
		$this->view->mostrarTablaCliente();
	}

	public function insertCliente($cliente){
			$verificado = $this->verificarFormulario($cliente);
			if($verificado){
				$this->model->newCliente($cliente);
				$this->view->MensajeExito();
			}
			else{
				$this->view->MensajeError();
			}
		}
	public function verificarFormulario($formulario){
		return true;
	}
	
	
	
}
?>