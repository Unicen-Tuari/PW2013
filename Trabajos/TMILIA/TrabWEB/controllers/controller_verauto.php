<?php
class Controlleradmin
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
	
	public function buscarAuto($id)
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		$consulta = $this->model->buscarAuto($id);
		$this->view->generaAutos($consulta);
		
	}
}

?>