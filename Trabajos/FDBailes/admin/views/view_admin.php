<?php
require('../libs/Smarty.class.php');
class Viewadmin
{
	private $smarty;
	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	public function muestraPagina()
	{
		$this->smarty->display('admin.tpl');
	}
	public function generaTablarep($datos)
	{
		$this->smarty->assign("reparaciones",$datos);
		$this->smarty->display('tabla_adminrep.tpl');
	}
	public function generaTablacli($datos)
	{
		$this->smarty->assign("clientes",$datos);
		$this->smarty->display('tabla_admincli.tpl');
	}
	public function generaDetallerep($datos)
	{
		$this->smarty->assign("detallerep",$datos);
		$this->smarty->display('pagdetallerep.tpl');
	}
	public function generaDetallecli($datos)
	{
		$this->smarty->assign("detallecli",$datos);
		$this->smarty->display('pagdetallecli.tpl');
	}
	public function generaBuscador()
	{
		$this->smarty->display("buscador.tpl");
	}
	public function generaFormrep($clientes,$estados)
	{
		$this->smarty->assign("clientes",$clientes);
		$this->smarty->assign("estados",$estados);
		$this->smarty->display("nuevareparacion.tpl");
	}
	public function generaFormcli()
	{
		$this->smarty->display("nuevocliente.tpl");
	}
	public function generaBusquedarep($datos)
	{
		$this->smarty->assign("reparaciones",$datos);
		$this->smarty->display("busqueda_adminrep.tpl");
	}
	public function generaBusquedacli($datos)
	{
		$this->smarty->assign("clientes",$datos);
		$this->smarty->display("tabla_admincli.tpl");
	}
	public function generaAlerta($id)
	{
		if($id == -1)
		{
			$this->smarty->display('alerta_nuevarep.tpl');	
		}
		else
		{
			$this->smarty->assign("id_cliente",$id);
			$this->smarty->display('alerta_nuevocli.tpl');
		}
	}
}
?>