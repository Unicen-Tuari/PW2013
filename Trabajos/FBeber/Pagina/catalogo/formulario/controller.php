<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}
	
	public function grabarFormulario($formulario)
	{
	    //$error = $this->verificarFormulario($formulario);
		//if(!$error)
		//{
			//print_r($formulario);
			$this->model->grabarFormulario($formulario);
			$this->view->MensajeExito();
		//}
		//else
		//{
		//	$this->view->MensajeError($error);
		//}	
	}
}
?>