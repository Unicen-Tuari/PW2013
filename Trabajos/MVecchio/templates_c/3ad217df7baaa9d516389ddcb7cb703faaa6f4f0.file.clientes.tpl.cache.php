<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 17:29:27
         compiled from ".\templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21236521597e5031613-71597309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ad217df7baaa9d516389ddcb7cb703faaa6f4f0' => 
    array (
      0 => '.\\templates\\clientes.tpl',
      1 => 1381177614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21236521597e5031613-71597309',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521597e515e674_07347551',
  'variables' => 
  array (
    'amigos' => 0,
    'cont' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521597e515e674_07347551')) {function content_521597e515e674_07347551($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
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