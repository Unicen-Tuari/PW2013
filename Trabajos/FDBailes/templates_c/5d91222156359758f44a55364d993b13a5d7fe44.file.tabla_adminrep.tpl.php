<?php /* Smarty version Smarty-3.1.14, created on 2013-10-03 21:40:51
         compiled from "./templates/tabla_adminrep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3155541985240ac40261978-85019968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d91222156359758f44a55364d993b13a5d7fe44' => 
    array (
      0 => './templates/tabla_adminrep.tpl',
      1 => 1380847071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3155541985240ac40261978-85019968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240ac40490a19_82457338',
  'variables' => 
  array (
    'reparaciones' => 0,
    'reparacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240ac40490a19_82457338')) {function content_5240ac40490a19_82457338($_smarty_tpl) {?><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['articulo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['fecha_ingreso_f'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['desperfecto'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>