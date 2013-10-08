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
	

	public function mostrarAuto()
	{	
		//Codigo para verificar datos del auto. Ejemplo: modelo no es vacio, anio > 1800
		/*$consulta = $this->model->consultaAuto();
		$this->view->generaAutos($consulta);*/
		$consulta = $this->view->generaAutos($this->model->consultaAuto());
	}

	public function mostrarCategorias()
	{	
		
		/*$consultacat = $this->model->consultaCategoria();
		$this->view->muestraCategoria($consultacat);*/
		$consultacat = $this->view->muestraCategoria($this->model->consultaCategoria());
		
	}
}


/*Tendrias que estar haciendo algo asi:
$view->CargarCategorias($model->GetCategorias())
$view->CargarAutos($model->GetAutos())
$view->ImprimirPagina();*/
?>

