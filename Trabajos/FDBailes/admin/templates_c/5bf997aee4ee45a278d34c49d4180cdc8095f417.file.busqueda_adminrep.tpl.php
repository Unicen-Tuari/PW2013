<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 18:26:03
         compiled from "./templates/busqueda_adminrep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16691718635254786b183cc3-30166763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf997aee4ee45a278d34c49d4180cdc8095f417' => 
    array (
      0 => './templates/busqueda_adminrep.tpl',
      1 => 1380846273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16691718635254786b183cc3-30166763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reparaciones' => 0,
    'reparacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5254786b2cfe48_11664159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254786b2cfe48_11664159')) {function content_5254786b2cfe48_11664159($_smarty_tpl) {?><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Apellido</th>
				<th class="text-center">Articulo</th>
				<th class="text-center">Fecha de Ingreso</th>
				<th class="text-center">Problema reportado</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['reparacion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reparacion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reparaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reparacion']->key => $_smarty_tpl->tpl_vars['reparacion']->value){
$_smarty_tpl->tpl_vars['reparacion']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['apellido'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['articulo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['fecha_ingreso_f'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['desperfecto'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table> 
	<?php }} ?>