<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirNoticia(){	


				if(isset($_GET['idSection'])){
					$Noticia = $this->model->getNoticiasBySection($_GET['idSection']);
				}
				else
				{
					$Noticia = $this->model->getNoticias();	
				}
			

			if($Noticia)
			{
					$this->view->setNoticias($Noticia);
			}

			$this->view->imprimirNoticia();
	}
}	
?>