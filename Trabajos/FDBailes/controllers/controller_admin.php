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
		if(isset($_GET["rep"]))
		{
			$this->view->generaTablarep($this->model->consultaReparaciones());	
		}
		else if(isset($_GET["cli"]))
		{
			$this->view->generaTablacli($this->model->consultaClientes());	
		}
		else
		{
			$this->view->muestraPagina();
		}
	}
}
?>