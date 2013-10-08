<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 21:09:28
         compiled from "./templates/buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66389561952534d380f08d1-28263749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca43de75b55300ae9eece7ae8dadc7f8eb983b9' => 
    array (
      0 => './templates/buscador.tpl',
      1 => 1381182762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66389561952534d380f08d1-28263749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534d381bb2c1_51592923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534d381bb2c1_51592923')) {function content_52534d381bb2c1_51592923($_smarty_tpl) {?><br>
	<div class="container">
		<form method="POST" action="" id="form_buscador">
			<div class="form-group col-lg-12 text-right">
				<label class="radio-inline">Seleccione tipo de busqueda:</label>
				<label class="radio-inline">
					<input type="radio" id="check_reparaciones" onclick="radioBuscarep();" name="tipobusqueda" value="reparacion" checked required>Reparación
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_clientes" onclick="radioBuscacli();" name="tipobusqueda" value="cliente" required>Cliente
				</label>
			</div>
			<div class="form-group col-lg-12 text-left">
				<label class="radio-inline">
					<input type="radio" id="check_na" name="campobusqueda" value="na" onclick="busquedaNA();" checked required>Nombre y Apellido
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_id_cliente" name="campobusqueda" value="id_cliente" onclick="busquedaIDcliente();" required>ID Cliente
				</label>
				<label class="radio-inline" id="campo_toggle">
					<input type="radio" id="check_id" name="campobusqueda" value="id" onclick="busquedaID();" required>ID Reparación
				</label>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor" id="input_principal" placeholder="Nombre" autofocus>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor2" id="input_secundario" placeholder="Apellido">
			</div> 
			<div class="form-group col-lg-12">
				<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
				<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div><?php }} ?>