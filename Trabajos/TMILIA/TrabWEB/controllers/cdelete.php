<?php
class Controllerdelete
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
    public function eliminarRegistro($pepito){

		$this->model->eliminarMensaje($pepito);
		$this->view->mostrar();
	}


	/*public function buscarUser($id){

		$consulta = $this->model->consultaUser($id);
		//$this->view->generaUser($consulta);
	}*/
}

?>