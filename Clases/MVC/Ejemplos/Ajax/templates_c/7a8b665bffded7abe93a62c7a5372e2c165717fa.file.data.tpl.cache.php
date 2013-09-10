<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 20:50:01
         compiled from ".\templates\data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3258452165d596e3cf8-27440577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a8b665bffded7abe93a62c7a5372e2c165717fa' => 
    array (
      0 => '.\\templates\\data.tpl',
      1 => 1377194730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258452165d596e3cf8-27440577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52165d59743554_41095432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52165d59743554_41095432')) {function content_52165d59743554_41095432($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Nombre'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Apellido'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Email'];?>
</td>
</tr>
<?php } ?>
	<?php }} ?>