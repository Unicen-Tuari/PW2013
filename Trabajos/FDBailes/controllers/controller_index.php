<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		if(isset($_GET["dni"]))
		{
			$consulta=$this->model->consultaReparaciones($_GET["dni"]);
			if($consulta)
			{
				$this->view->generaTabla($consulta);	
			}
		}
		else
		{
			$this->view->muestraPagina();
		}
	}
}
?>