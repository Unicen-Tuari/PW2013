<?php /* Smarty version Smarty-3.1.14, created on 2013-10-20 18:56:39
         compiled from "./templates/pagdetallerep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187947723252534d25521ea7-45892444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964f4fe2aa577692359f2d7fa4aeec60444999c7' => 
    array (
      0 => './templates/pagdetallerep.tpl',
      1 => 1382306066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187947723252534d25521ea7-45892444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534d257472a5_39540356',
  'variables' => 
  array (
    'detallerep' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534d257472a5_39540356')) {function content_52534d257472a5_39540356($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['apellido'];?>
 - <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['id_cliente'];?>
</h4>
	<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['telefono'];?>
 - <?php echo $_smarty_tpl->tpl_vars['detallerep']->value['mail'];?>
</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_rep">
	<div class="modal-body" >
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_rep" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['id'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" name="articulo_n" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['articulo'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['marca'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['modelo'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" name="serie" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['numero_serie'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Ingreso</span>
			<input class="form-control input-sm" type="text" name="fecha_ing" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['fecha_ingreso_f'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Egreso</span>
			<input class="form-control input-sm" type="text" name="fecha_egr" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['fecha_egreso_f'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm" name="problema" readonly><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['desperfecto'];?>
</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm" name="notas" readonly><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['notas'];?>
</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<select class="form-control input-sm" name="estado" disabled>
				<?php  $_smarty_tpl->tpl_vars['estado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->key => $_smarty_tpl->tpl_vars['estado']->value){
$_smarty_tpl->tpl_vars['estado']->_loop = true;
?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detallerep']->value['id_estado'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2){?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre_estado'];?>
</option>
				<?php }else{ ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre_estado'];?>
</option>
				<?php }?>
				<?php } ?>
			</select>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['detallerep']->value['precio_reparacion'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borrarep" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
			<button type="button" id="boton_modificarep" class="btn btn-primary col-lg-3 pull-right"><span class="glyphicon glyphicon-edit"></span></button>
		</div>
	</div>
</form><?php }} ?>