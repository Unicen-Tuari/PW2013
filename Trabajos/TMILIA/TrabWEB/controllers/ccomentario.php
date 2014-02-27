<?php
class Controllercomentario
{
    private $model;
	private $view;

 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	/*public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}
*/
	public function mostrarPagina() {
		$this->view->muestraPagina();
	}

		public function grabarConsulta($consulta)
	{	
		
		$this->model->insertarConsulta($consulta);
		//$this->view->mensajeExito();
	}
	

	public function mostrarComentario($id)
	{	

		//print_r($id);
		$consulta = $this->model->buscarComentario($id);
		if ($consulta) {
			$this->view->muestraPagina($consulta);
			
		}
		
	}

	
}

?>