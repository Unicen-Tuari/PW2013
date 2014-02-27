<?php
class Controllermensaje
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


	public function mostrarMensaje($id)
	{	
		$mensaje= $this->model->consultaMensaje($id);
	    $this->view->mostrar($mensaje);
	   print_r($mensaje);
		
	}

	public function buscarUser($id){

		$consulta = $this->model->consultaUser($id);
		$this->view->generaUser($consulta);
	}
}

?>