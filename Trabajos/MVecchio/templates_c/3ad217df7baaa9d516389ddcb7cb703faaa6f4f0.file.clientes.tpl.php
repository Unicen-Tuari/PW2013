<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 04:22:53
         compiled from ".\templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17481526a01ab5147a1-59542542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ad217df7baaa9d516389ddcb7cb703faaa6f4f0' => 
    array (
      0 => '.\\templates\\clientes.tpl',
      1 => 1382736294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17481526a01ab5147a1-59542542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526a01ab5e3850_27961314',
  'variables' => 
  array (
    'amigos' => 0,
    'cont' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a01ab5e3850_27961314')) {function content_526a01ab5e3850_27961314($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['amigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable(0, null, 0);?> 
	<?php while ($_smarty_tpl->tpl_vars['cont']->value<2){?> 
		<a id="linkamigo" href="//<?php echo $_smarty_tpl->tpl_vars['cliente']->value['web'];?>
" target="_blank"><img alt="Imagen Amigo" src="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['url_imagen'];?>
"></a>
		<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable($_smarty_tpl->tpl_vars['cont']->value+1, null, 0);?> 
	<?php }?>
<?php } ?>
				<?php }} ?>