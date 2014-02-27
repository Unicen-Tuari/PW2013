<?php
class Controlleredit
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


	public function grabarEdicion($auto, $pepito)
	{	
		//var_dump($auto);
		$this->model->insertarEdicion($auto,$pepito);
		$this->view->mensajeExito();
	}
	public function buscarAuto($id_car_upload)
	{	
		
		$consulta = $this->model->consultaAuto($id_car_upload);
		//print_r($consulta);

		if($consulta == null)
		{
			return false;
		}
		else
		{ 
			//var_dump($consulta);
			$this->view->uploadAuto($consulta);
		}
	}

	
}

?>