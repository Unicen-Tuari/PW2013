<?php /* Smarty version Smarty-3.1.14, created on 2013-10-20 12:30:53
         compiled from "./templates/pagdetallecli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150609588352534d2f37ffd8-40176727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99270952a3b4d62c35835614e7fc524fdce0128b' => 
    array (
      0 => './templates/pagdetallecli.tpl',
      1 => 1382282930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150609588352534d2f37ffd8-40176727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534d2f4bcda4_05824295',
  'variables' => 
  array (
    'detallecli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534d2f4bcda4_05824295')) {function content_52534d2f4bcda4_05824295($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Detalle del Cliente</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_cli">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['id'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_n" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['nombre'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control input-sm" type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['apellido'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control input-sm" type="text" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['direccion'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control input-sm" type="tel" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['telefono'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['mail'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracli" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
			<button type="button" id="boton_modificacli" class="btn btn-primary col-lg-3 pull-right"><span class="glyphicon glyphicon-edit"></span></button>
		</div>
	</div>
</form><?php }} ?>