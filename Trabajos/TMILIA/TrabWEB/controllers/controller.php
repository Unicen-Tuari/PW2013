<?php
class Controllerindex
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
	

	public function mostrarAuto()
	{	
		$consulta = $this->view->generaAutos($this->model->consultaAuto(), $this->model->consultaImagen());
	}

	public function mostrarCategorias()
	{	
		$consultacat = $this->view->muestraCategoria($this->model->consultaCategoria());
		
	}

	public function buscarImag() // 63
	{	
		//$this->model->buscarimagen($id);
		$path = $this->model->consultaImagen();
		$this->view->mostrarImagen($path);
		//print_r($path);
		
	 }

	public function buscarCat($id)
	{	
		
		$consulta = $this->model->buscarCat($id);
		if ($consulta) {
			$this->view->generaCat($consulta);
			
		}
		
	}
}



?>

