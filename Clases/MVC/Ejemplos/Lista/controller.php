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
		$this->view->imprimirListaPersonas($this->model->listaNombresPersonas,$this->model->listaApellidosPersonas);
	}
}
?>