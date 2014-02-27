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

	public function mostrarPagina() {
		$this->view->muestraPagina();
	}

	public function mostrarCategorias()
	{	
		$consultacat = $this->view->muestraCategoria($this->model->consultaCategoria());
		
	}
	
	public function buscarAuto($id)
	{	
		$consulta = $this->model->buscarAuto($id);
		if ($consulta) {
			$this->view->generaAutos($consulta);
			
		}

		
	}
	public function buscarImag($id) // 63
	{	
		//$this->model->buscarimagen($id);
		$path = $this->model->consultaImagen($id);
		$this->view->mostrarImagen($path);
		//print_r($path);
		
		
	 }

		public function grabarConsulta($consulta, $id)
	{	
		
		$this->model->insertarConsulta($consulta, $id);
		//$this->view->mensajeExito();
	}
	public function buscarCat($id)
	{	
		
		$consulta = $this->model->buscarCat($id);
		if ($consulta) {
			$this->view->generaCat($consulta);
			
		}
		
	}

	/*public function mostrarComentario($id)
	{	
		
		$consulta = $this->model->buscarComentario($id);
		if ($consulta) {
			$this->view->muestraPagina($consulta);
			
		}
		
	}*/

	
}

?>