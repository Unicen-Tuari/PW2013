<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function CargarNoticia($noticia)
	{
			$this->model->insertarNoticia($noticia);
		
	}
			
}
?>