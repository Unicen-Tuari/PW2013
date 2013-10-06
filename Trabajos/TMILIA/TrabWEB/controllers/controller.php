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
	
	public function grabarAuto($auto)
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		$this->model->insertarAuto($auto);
		$this->view->mensajeExito();
	}
	public function mostrarAuto()
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		$consulta = $this->model->consultaAuto();

		if($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaAutos($consulta);
		}
	}
}

?>