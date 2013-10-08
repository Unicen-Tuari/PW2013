<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 21:09:18
         compiled from "./templates/tabla_admincli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20026329052534d2e0bb2b9-77900549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f3f3f4bb15d57a54007c789e2cabff0016f400' => 
    array (
      0 => './templates/tabla_admincli.tpl',
      1 => 1380847029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20026329052534d2e0bb2b9-77900549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clientes' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534d2e1e7b93_89555296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534d2e1e7b93_89555296')) {function content_52534d2e1e7b93_89555296($_smarty_tpl) {?><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Apellido</th>
				<th class="text-center">Dirección</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['apellido'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['direccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['mail'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>