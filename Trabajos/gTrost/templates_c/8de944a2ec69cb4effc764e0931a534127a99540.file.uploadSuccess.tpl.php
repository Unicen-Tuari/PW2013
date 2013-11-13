<?php /* Smarty version Smarty-3.1.14, created on 2013-11-09 05:36:00
         compiled from "./templates/uploadSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137607344527dee3056b233-92059622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de944a2ec69cb4effc764e0931a534127a99540' => 
    array (
      0 => './templates/uploadSuccess.tpl',
      1 => 1383985230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137607344527dee3056b233-92059622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527dee3059cd33_26658611',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527dee3059cd33_26658611')) {function content_527dee3059cd33_26658611($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="admin_panel navbar-inverse">
	<p>La solicitud fue procesada con éxito.</p>
	<p><a href="/admin">Volver</a></p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>