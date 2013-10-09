<?php /* Smarty version Smarty-3.1.15, created on 2013-10-07 22:06:48
         compiled from ".\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4528525312b7839380-49427404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1381176405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4528525312b7839380-49427404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_525312b786a383_60624845',
  'variables' => 
  array (
    'variable' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525312b786a383_60624845')) {function content_525312b786a383_60624845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>hola <?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
!</h1>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
