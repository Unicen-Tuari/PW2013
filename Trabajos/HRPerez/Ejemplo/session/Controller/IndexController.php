<?php
class IndexController
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		session_start();
		if(isset($_SESSION["mail"]))
		{
			$this->view->imprimirPagina($_SESSION["mail"]);
		}
		else
		{
			
			$this->view->imprimirPagina(null);
		}
	}
}
?>