<?php
class Controlleradmin
{
	private $model;
	private $view;
	
	public function __construct($model, $view) 
	{
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
		$this->view->generaFormrep($this->model->consultaClientesmin(),$this->model->consultaEstadosrep());
	}
	public function imprimirFormcli()
	{
		$this->view->generaFormcli();
	}
	public function imprimirDetallerep($id_reparacion)
	{
		$this->view->generaDetallerep($this->model->consultaDetallerep($id_reparacion),$this->model->consultaEstadosrep());
	}
	public function imprimirDetallecli($id_cliente)
	{
		$this->view->generaDetallecli($this->model->consultaDetallecli($id_cliente));
	}
	public function imprimirBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($valor_principal == null)
		{
			$valor_principal = '%';
		}
		if ($valor_secundario == null)
		{
			$valor_secundario = '%';
		}
		$consulta=$this->model->consultaBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda);
		if ($consulta == null)
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
		if ($valor_principal == null)
		{
			$valor_principal = '%';
		}
		if ($valor_secundario == null)
		{
			$valor_secundario = '%';
		}
		$consulta=$this->model->consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedacli($consulta);
		}
	}
	public function insertaCli($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->guardaCli($arreglo));
	}
	public function insertaRep($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		if (!$arreglo['precio'])
		{
			$arreglo['precio'] = 0;
		}
		$this->view->generaAlerta($this->model->guardaRep($arreglo));
	}
	public function actualizaCli($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->updateCli($arreglo));
	}
	public function actualizaRep($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		if ($arreglo['estado'] == 3)
		{
			$arreglo['fecha_egr'] = 'CURRENT_DATE()';
		}
		else
		{
			$arreglo['fecha_egr'] = 'NULL';
		}
		$this->view->generaAlerta($this->model->updateRep($arreglo));
	}
	public function borrarCli($id)
	{
		$this->view->generaAlerta($this->model->deleteCli($id));
	}
	public function borrarRep($id)
	{
		$this->view->generaAlerta($this->model->deleteRep($id));
	}
}
?>