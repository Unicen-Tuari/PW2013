<?php
class Controllercat
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

	public function mostrarCategorias()
	{	
		
		/*$consultacat = $this->model->consultaCategoria();
		$this->view->muestraCategoria($consultacat);*/
		$consultacat = $this->view->muestraCategoria($this->model->consultaCategoria());
		
	}

	public function buscarCat($id)
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		$consulta = $this->model->buscarCat($id);
		if ($consulta) {
			$this->view->generaCat($consulta);
			
		}

		// $this->view->generaAutos($consulta); //imprimo template de error
	}
}

?>