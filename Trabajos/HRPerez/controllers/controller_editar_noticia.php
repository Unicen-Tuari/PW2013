<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }
	

	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}

	
	public function CrearNoticia($noticia)
	{
			$this->model->insertarNoticia($noticia);
		
	}
	
	public function EditarNoticia(){
			if (isset ($_GET['id_noticia'])) 
			{
				$noticia = $this->model->ConsultaNoticia($_GET['id_noticia']);
				$this->view->ImprimirPagina($noticia);
			}

	}		
}
?>