<?php /* Smarty version Smarty-3.1.14, created on 2013-08-07 02:05:17
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:907952018ec7d651b0-01653331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1375833911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907952018ec7d651b0-01653331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52018ec7dbdc09_88013576',
  'variables' => 
  array (
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52018ec7dbdc09_88013576')) {function content_52018ec7dbdc09_88013576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


 <div class="container">
  <h1>Datos Personales</h1>
  <label>Nombre:</label> <p><?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
</p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>