<?php
class Controlleraddcar
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

	public function mostrarMarca()
	{	
		
		$consulta = $this->model->consultaMarca();

		if($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->muestraMarca($consulta);
		}
	}

		public function grabarAuto($auto)
	{	
		
		$this->model->insertarAuto($auto);
		$this->view->mensajeExito();
	}

	
}

?>