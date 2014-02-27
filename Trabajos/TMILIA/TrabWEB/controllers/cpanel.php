<?php
class Controllerpanel
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function muestraPagina()
	{
		$this->view->muestraPagina();
	}
	public function mostrarAuto($id)
	{	
		
		$consulta = $this->model->consultaAuto($id);
		//print_r($consulta);

		if($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaAutos($consulta);
		}
	}


	public function buscarUser($id){

		$consulta = $this->model->consultaUser($id);
		$this->view->generaUser($consulta);
	}
}

?>