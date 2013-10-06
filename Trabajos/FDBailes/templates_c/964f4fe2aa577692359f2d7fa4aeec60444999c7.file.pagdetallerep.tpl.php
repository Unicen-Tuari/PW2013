<?php /* Smarty version Smarty-3.1.14, created on 2013-10-03 21:36:16
         compiled from "./templates/pagdetallerep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14569130665240af41dc0978-96586908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964f4fe2aa577692359f2d7fa4aeec60444999c7' => 
    array (
      0 => './templates/pagdetallerep.tpl',
      1 => 1380846954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14569130665240af41dc0978-96586908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240af420738f8_97818094',
  'variables' => 
  array (
    'detallerep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240af420738f8_97818094')) {function content_5240af420738f8_97818094($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['apellido'];?>
 - <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['id_cliente'];?>
</h4>
	<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['telefono'];?>
 - <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['mail'];?>
</h4>
</div>
<form class="form-horizontal text-left" method="POST" action="input-group-addon input-sm detallemodal">
	<div class="modal-body" >
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['id'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['articulo'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['marca'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['modelo'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['numero_serie'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Ingreso</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['fecha_ingreso_f'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Egreso</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['fecha_egreso_f'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['desperfecto'];?>
</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['notas'];?>
</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['nombre_estado'];?>
" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['precio_reparacion'];?>
" >
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	</div>
</form><?php }} ?>