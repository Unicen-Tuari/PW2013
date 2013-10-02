<?php /* Smarty version Smarty-3.1.14, created on 2013-10-01 20:42:20
         compiled from "./templates/pagdetallecli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20774637475240b6ba613ff6-07612400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99270952a3b4d62c35835614e7fc524fdce0128b' => 
    array (
      0 => './templates/pagdetallecli.tpl',
      1 => 1380670921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20774637475240b6ba613ff6-07612400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240b6ba7505b6_41038915',
  'variables' => 
  array (
    'detallecli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240b6ba7505b6_41038915')) {function content_5240b6ba7505b6_41038915($_smarty_tpl) {?>	<div class="modal-header">
		<h4 class="modal-title">Detalle del Cliente</h4>
    </div>
    <div class="modal-body" >
    <form class="form-horizontal text-left" method="POST" action="">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['id'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['nombre'];?>
" >
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['apellido'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['direccion'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['telefono'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['mail'];?>
" >
		</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
	</div>
	</form>
<?php }} ?>