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
			$this->view->muestramarca($consulta);
		}
	}

		public function grabarAuto($auto)
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		$this->model->insertarAuto($auto);
		//$this->view->mensajeExito();
	}
}

?>