<?php /* Smarty version Smarty-3.1.14, created on 2013-08-07 02:31:46
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:907952018ec7d651b0-01653331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1375835502,
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
    'Sueldo' => 0,
    'Overview' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52018ec7dbdc09_88013576')) {function content_52018ec7dbdc09_88013576($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\xampp\\htdocs\\sexample\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_mb_wordwrap')) include 'D:\\xampp\\htdocs\\sexample\\libs\\plugins\\shared.mb_wordwrap.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


 <div class="container">
  <h1>Datos Personales</h1>
  <strong>Nombre:</strong> <p><?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
</p>
  <strong>Nombre (Mayusculas):</strong> <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Nombre']->value,true);?>
</p>
  <strong>Nombre (LowerCase):</strong> <p><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Nombre']->value, 'UTF-8');?>
</p>
  <strong>Nombre: (UpperCase)</strong> <p><?php echo mb_strtolower($_smarty_tpl->tpl_vars['Nombre']->value, 'UTF-8');?>
</p>
  <strong>Sueldo: </strong> <p><?php echo $_smarty_tpl->tpl_vars['Sueldo']->value;?>
</p>
  <strong>Sueldo (SinDecimales): </strong> <p><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['Sueldo']->value);?>
</p>
  <strong>Sueldo (Con 2 Decimales): </strong> <p><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['Sueldo']->value);?>
</p>
  <strong>Overview: </strong> <p><?php echo $_smarty_tpl->tpl_vars['Overview']->value;?>
</p>
  <strong>Overview ww30: </strong> <p><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['Overview']->value,30,"<br />\n",false);?>
</p>
  <strong>Overview ww60: </strong> <p><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['Overview']->value,60,"<br />\n",false);?>
</p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>