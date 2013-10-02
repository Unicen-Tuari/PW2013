<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 22:11:37
         compiled from "./templates/buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13271065295240b21470c6d7-35828147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca43de75b55300ae9eece7ae8dadc7f8eb983b9' => 
    array (
      0 => './templates/buscador.tpl',
      1 => 1379982327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13271065295240b21470c6d7-35828147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240b2147ae250_40581036',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240b2147ae250_40581036')) {function content_5240b2147ae250_40581036($_smarty_tpl) {?><br>
<div class="container">
	<form class="form-horizontal" method="POST" action="" id="form_buscador">
			<div class="form-group col-lg-12 text-right">
				<label class="radio-inline">Seleccione tipo de busqueda:</label>
				<label class="radio-inline">
					<input type="radio" id="check_reparaciones" onclick="$('#campo_toggle').fadeIn(200);" name="tipobusqueda" value="reparacion" checked required>Reparación
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_clientes" onclick="$('#campo_toggle').fadeOut(200);"  name="tipobusqueda" value="cliente" required>Cliente
				</label>
			</div>
			<div>
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
					<input class="form-control" type="text" name="valor" id="input_principal" placeholder="Nombre" required>
				</div>
				<div class="form-group col-lg-12">
					<input class="form-control" type="text" name="valor2" id="input_secundario" placeholder="Apellido" required>
				</div> 
				<div class="form-group col-lg-12">
					<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
					<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</div>
	</form>
</div><?php }} ?>