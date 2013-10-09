<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 16:15:44
         compiled from "./templates/tabla_consulta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7121135855251b6e0641584-83330842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa5c09c030d91a32a62a6ac3285c8f80f4f28ca6' => 
    array (
      0 => './templates/tabla_consulta.tpl',
      1 => 1380847143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7121135855251b6e0641584-83330842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reparaciones' => 0,
    'reparacion' => 0,
    'clase' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5251b6e07fe896_62415313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5251b6e07fe896_62415313')) {function content_5251b6e07fe896_62415313($_smarty_tpl) {?><table class="table table-responsive">
	<thead>
		<tr class="active">
			<th class="text-center">ID</th>
			<th class="text-center">Articulo</th>
			<th class="text-center">Marca</th>
			<th class="text-center">Modelo</th>
			<th class="text-center">Fecha de Ingreso</th>
			<th class="text-center">Fecha de Egreso</th>
			<th class="text-center">Estado</th>
			<th class="text-center">Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['reparacion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reparacion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reparaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reparacion']->key => $_smarty_tpl->tpl_vars['reparacion']->value){
$_smarty_tpl->tpl_vars['reparacion']->_loop = true;
?>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['nombre_estado'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="Retirada"){?>
				<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("success", true, 0);?>
			<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['nombre_estado'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="En Reparación"){?>
				<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("danger", true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("warning", true, 0);?>
			<?php }}?>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['clase']->value;?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['articulo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['marca'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['modelo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['fecha_ingreso_f'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['fecha_egreso_f'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['nombre_estado'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['precio_reparacion'];?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php }} ?>