<?php /* Smarty version Smarty-3.1.14, created on 2013-10-03 18:42:58
         compiled from "editardatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15185524de4e20593e4-21777143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0d4de25bbc586611d89a18d52123aae9e79d21' => 
    array (
      0 => 'editardatos.tpl',
      1 => 1380836555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15185524de4e20593e4-21777143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524de4e216dc40_14518812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524de4e216dc40_14518812')) {function content_524de4e216dc40_14518812($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>
	
			<div id="contenedorcentral">
				<article id="articulo" >
				
				</article>
				<aside id="contenedorlateral">
						<?php echo $_smarty_tpl->getSubTemplate ("loguin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

									
						<?php echo $_smarty_tpl->getSubTemplate ("publis.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
				
				</aside>
			</div>	
		</div>		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
	
<?php }} ?>