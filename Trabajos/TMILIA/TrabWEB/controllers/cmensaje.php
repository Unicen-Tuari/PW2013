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


	public function mostrarMensaje()
	{	
	
	  $mensaje = $this->view->mostrarMensaje($this->model->consultaMensaje());
		
	}
}

?>