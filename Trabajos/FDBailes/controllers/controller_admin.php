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
		$this->view->muestraPagina();
	}
	public function imprimirTablarep()
	{
		$this->view->generaTablarep($this->model->consultaReparaciones());
	}
	public function imprimirTablacli()
	{
		$this->view->generaTablacli($this->model->consultaClientes());
	}
	public function imprimirBuscador()
	{
		$this->view->generaBuscador();
	}
	public function imprimirFormrep()
	{
		$this->view->generaFormrep();
	}
	public function imprimirFormcli()
	{
		$this->view->generaFormcli();
	}
	public function imprimirDetallerep($id_reparacion)
	{
		$this->view->generaDetallerep($this->model->consultaDetallerep($id_reparacion));
	}
	public function imprimirDetallecli($id_cliente)
	{
		$this->view->generaDetallecli($this->model->consultaDetallecli($id_cliente));
	}
	public function imprimirBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		$consulta=$this->model->consultaBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda);
		if($consulta==null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedarep($consulta);
		}
	}
	public function imprimirBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		$consulta=$this->model->consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda);
		if($consulta==null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedacli($consulta);
		}
	}
}
?>